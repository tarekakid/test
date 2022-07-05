@extends('layouts.app')
{{-- Page title --}}
@section('title', 'Категории')

@section('section')
    <div class="container">
        <h1 class="my-md-5 my-4">Добавить категорию</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                @if ($check == null)
                    <form runat="server" method="POST" action="{{ url('add-category') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName"
                                name="category" required>
                            <label for="floatingName">Название</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                @else
                    <form runat="server" method="POST" action="{{ url('update-category/'. $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" value="{{ $category->category }}"
                                name="category" required>
                            <label for="floatingName">Название</label>
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
