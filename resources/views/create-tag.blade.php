@extends('layouts.app')

{{-- Page title --}}
@section('title', 'Теги')

@section('section')
    <div class="container">
        <h1 class="my-md-5 my-4">Добавить тег</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                @if ($check == null)
                    <form runat="server" method="POST" action="{{ url('add-tag') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName"
                                name="tag" required>
                            <label for="floatingName">Название</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                @else
                    <form runat="server" method="POST" action="{{ url('update-tag/'. $tag->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" value="{{ $tag->tag }}"
                                name="tag" required>
                            <label for="floatingName">Название</label>
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
