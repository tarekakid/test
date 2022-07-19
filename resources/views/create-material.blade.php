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
                            <select class="form-select @error('type') is-invalid @enderror" id="floatingSelectType"
                                name="type">
                                <option value="" selected>Выберите тип</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->type }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectType">Тип</label>
                            @if ($errors->any())
                                @error('type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select @error('category') is-invalid @enderror" id="floatingSelectCategory"
                                name="category">
                                <option value="" selected>Выберите категорию</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectCategory">Категория</label>
                            @if ($errors->any())
                                @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Напишите название" id="floatingName" name="name">
                            <label for="floatingName">Название</label>
                            @if ($errors->any())
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите авторов" id="floatingAuthor"
                                name="author">
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
                            <select class="form-select @error('type') is-invalid @enderror" id="floatingSelectType"
                                name="type">
                                <option value="{{ $material->type }}" selected>{{ $material->type }}</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->type }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectType">Тип</label>
                            @if ($errors->any())
                                @error('type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select @error('category') is-invalid @enderror" id="floatingSelectCategory"
                                name="category">
                                <option value="{{ $material->category }}" selected>{{ $material->category }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectCategory">Категория</label>
                            @if ($errors->any())
                                @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Напишите название" id="floatingName" name="name" value="{{ $material->name }}">
                            <label for="floatingName">Название</label>
                            @if ($errors->any())
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            @endif
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
                        <button class="btn btn-primary" type="submit">Обновить</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('layouts/script')
@endsection
