<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\LinksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Начать операции над материалами

    // Получить информации о материалах
    Route::get('/', [MaterialsController::class,'main']);

    // Страница для добавления нового материала
    Route::get('create-material', [MaterialsController::class,'index']);

    // Редактировать выбранного материала
    Route::get('edit-material/{id}', [MaterialsController::class,'edit']);

    // Создать нового материала
    Route::post('add-material', [MaterialsController::class,'create']);

    // Обновить информацию о материале
    Route::post('update-material/{id}', [MaterialsController::class,'update']);

    // Удалить выбранный материал
    Route::get('delete-material/{id}', [MaterialsController::class,'delete']);

// Окончание операций с материалами

// Начать операции над теги

    // Получить информации о тегах
    Route::get('tag', [TagsController::class,'main']);

    // Страница для добавления нового тега
    Route::get('create-tag', [TagsController::class,'index']);

    // Редактировать выбранный тег
    Route::get('edit-tag/{id}', [TagsController::class,'edit']);

    // Создать новый тег
    Route::post('add-tag', [TagsController::class,'create']);

    // Удалить выбранный тег
    Route::get('delete-tag/{id}', [TagsController::class,'delete']);

    // Обновить информацию о теге
    Route::post('update-tag/{id}', [TagsController::class,'update']);

// Завершение операций с тегами

// Начать операций с тегом материала

    // Получить информацию о категориях
    Route::get('category', [CategoryController::class,'main']);

    // Страница добавления новой категории
    Route::get('create-category', [CategoryController::class,'index']);

    // Создать новую категорию
    Route::post('add-category', [CategoryController::class,'create']);

    // Удалить выбранную категорию
    Route::get('delete-category/{id}', [CategoryController::class,'delete']);

    // Редактировать выбранную категорию
    Route::get('edit-category/{id}', [CategoryController::class,'edit']);

    // Обновить информацию о категории
    Route::post('update-category/{id}', [CategoryController::class,'update']);

// Завершение операций по категориям

// Начать операции над материалом тега

    // Добавить новый тег к материалу
    Route::post('tag-material/{id}', [TagsController::class,'add']);

    // Удалить тег материала
    Route::get('tagm-delete/{id}', [TagsController::class,'deleteTag']);

// Завершение операций по материалом тега

// Начать операций по просмотру материала

    // Просмотр материала
    Route::get('view-material/{name}', [MaterialsController::class,'view']);

    // Создать новую ссылку
    Route::post('add-link/{id}', [LinksController::class,'create']);

    // Удалить выбранную ссылку
    Route::get('delete-link/{id}', [LinksController::class,'delete']);

    // Обновить информацию о ссыл
    Route::post('view-material/update-link/{id}', [LinksController::class,'update']);

// Завершение операций с тегом материала

// Начать поисковые операции

    // Поиск материалов по (названию, автору, типу, категории)
    Route::post('search-material', [MaterialsController::class,'search']);

    // Поиск материалов по тегу
    Route::get('search-tag/{tag}', [MaterialsController::class,'searchTag']);

// Завершение операций по поиску
