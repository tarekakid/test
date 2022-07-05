@extends('layouts.app')

{{-- Page title --}}
@section('title', 'Материалы')

@section('section')
    <div class="container">
        <h1 class="my-md-5 my-4">Добавить материал</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                @if ($check == null)
                    <form runat="server" method="POST" action="{{ url('add-material') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectType" name="type" required>
                                <option selected>Выберите тип</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->type }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectType">Тип</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectCategory" name="category" required>
                                <option selected>Выберите категорию</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectCategory">Категория</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName"
                                name="name" required>
                            <label for="floatingName">Название</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите авторов" id="floatingAuthor"
                                name="author" required>
                            <label for="floatingAuthor">Авторы</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Напишите краткое описание" id="floatingDescription" style="height: 100px"
                                name="description"></textarea>
                            <label for="floatingDescription">Описание</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                @else
                    <form runat="server" method="POST" action="{{ url('update-material/' . $material->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectType" name="type">
                                @foreach ($types as $tp)
                                    <option {{ $tp->type == $material->type ? 'selected' : '' }}
                                        value="{{ $tp->type }}">{{ $tp->type }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectType">Тип</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectCategory" name="category">
                                @foreach ($categories as $cat)
                                    <option {{ $cat->category == $material->category ? 'selected' : '' }}
                                        value="{{ $cat->category }}">{{ $cat->category }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectCategory">Категория</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName"
                                name="name" value="{{ $material->name }}">
                            <label for="floatingName">Название</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите авторов" id="floatingAuthor"
                                name="author" value="{{ $material->author }}">
                            <label for="floatingAuthor">Авторы</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Напишите краткое описание" id="floatingDescription" style="height: 100px"
                                name="description">{{ $material->description }}</textarea>
                            <label for="floatingDescription">Описание</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('layouts/script')
@endsection
