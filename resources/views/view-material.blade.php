@extends('layouts.app')

{{-- Page title --}}
@section('title', 'Материалы')

@section('section')
    @php
    use App\Models\TagsMaterial;
    use App\Models\Tags;

    $tags_material = null;
    if (TagsMaterial::where('material_id', $material->id)->exists()) {
        $tags_material = TagsMaterial::where('material_id', $material->id)->get();
    }
    @endphp
    <div class="container">
        <h1 class="my-md-5 my-4">{{ $material->name }}</h1>
        <div class="row mb-3">
            <div class="col-lg-6 col-md-8">
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Авторы</p>
                    <p class="col">{{ $material->author }}</p>
                </div>
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Тип</p>
                    <p class="col">{{ $material->type }}</p>
                </div>
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Категория</p>
                    <p class="col">{{ $material->category }}</p>
                </div>
                <div class="d-flex text-break">
                    <p class="col fw-bold mw-25 mw-sm-30 me-2">Описание</p>
                    <p class="col">{{ $material->description }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form runat="server" method="POST" action="{{ url('tag-material/' . $material->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <h3>Теги</h3>
                    <div class="input-group mb-3">
                        <select class="form-select" id="selectAddTag" aria-label="Добавьте автора" name="tag_id" required>
                            <option selected>Выберите тег</option>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
                            @endforeach
                        </select>
                        <input type="text" class="form-control d-none" placeholder="Напишите название" id="floatingName"
                            name="material_id" value="{{ $material->id }}">
                        <button class="btn btn-primary" type="submite">Добавить</button>
                    </div>
                </form>
                <ul class="list-group mb-4">
                    @if ($tags_material == null)
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            Теги не добавлены
                        </li>
                    @else
                        @foreach ($tags_material as $tag_material)
                            @php
                                $tag = Tags::where('id', $tag_material->tag_id)->first();
                            @endphp
                            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                <a href="{{ url('search-tag/'. $tag->tag ) }}" class="me-3">
                                    {{ $tag->tag }}
                                </a>
                                <a href="{{ url('tagm-delete/' . $tag_material->id) }}" class="text-decoration-none"
                                    onclick="return confirm('Are you sure?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </a>
                            </li>
                        @endforeach

                    @endif
                </ul>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between mb-3">
                    <h3>Ссылки</h3>
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" id="addUrl"
                        data-bs-target="#exampleModal" data-id="{{ $material->id }}">Добавить</a>
                </div>
                <ul class="list-group mb-4">
                    @if ($urls == null)
                        <li class="list-group-item list-group-item-action d-flex justify-content-between">
                            Ссылки не добавлены
                        </li>
                    @else
                        @foreach ($urls as $url)
                            <li class="list-group-item list-group-item-action d-flex justify-content-between">
                                <a href="{{ $url->url }}" class="me-3">
                                    {{ $url->signature == null ? $url->url:$url->signature }}
                                </a>
                                <input type="text" class="form-control d-none" placeholder="Напишите подпись ссылки" id="url"
                                id="floatingSignature" value="{{ $url->id }}" >
                                <span class="text-nowrap">
                                    <a href="#" type="{{ $url->id }}" class="open-AddUrlDialog text-decoration-none me-2 "
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-id="{{ $url->url }}" id="{{ $url->signature }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                        </svg>
                                    </a>
                                    <a href={{ url('delete-url/' . $url->id) }}" class="text-decoration-none"
                                        onclick="return confirm('Are you sure?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </span>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавление новую ссылку</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form runat="server" method="POST" action="{{ url('add-url/' . $material->id) }}"
                        enctype="multipart/form-data" id="formId">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите подпись ссылки"
                                id="floatingSignature" name="signature">
                            <label for="floatingSignature">Подпись ссылки</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bookId" placeholder="Напишите ссылку"
                                id="floatingUrl" name="url" required>
                            <label for="floatingUrl">Ссылка</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>

                        <button class="btn btn-primary" id="formButton" type="submit">Добавить</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Отмена</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('layouts/script')
@endsection
