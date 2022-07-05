<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UrlsController;
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

// Start Operations on Materials
    Route::get('/', [MaterialsController::class,'main']);
    // Create Material page
    Route::get('create-material', [MaterialsController::class,'index']);
    // Edite selected Material page
    Route::get('edit-material/{id}', [MaterialsController::class,'edit']);
    // Add new MAterial
    Route::post('add-material', [MaterialsController::class,'create']);
    // Update Material information
    Route::post('update-material/{id}', [MaterialsController::class,'update']);
    // Delete selected page
    Route::get('delete-material/{id}', [MaterialsController::class,'delete']);
// End Operations on Materials

// Start Operations on Tags
    Route::get('tag', [TagsController::class,'main']);
    // Edit selected Tag
    Route::get('edit-tag/{id}', [TagsController::class,'edit']);
    // Add new Tag
    Route::post('add-tag', [TagsController::class,'create']);
    // Delete selected Tag
    Route::get('delete-tag/{id}', [TagsController::class,'delete']);
    // Update Material information
    Route::post('update-tag/{id}', [TagsController::class,'update']);

    Route::get('create-tag', [TagsController::class,'index']);
// End Operations on Tags

// Start Operations on Categories
    Route::get('category', [CategoryController::class,'main']);
    Route::post('add-category', [CategoryController::class,'create']);
    Route::get('delete-category/{id}', [CategoryController::class,'delete']);
    // Edit selected Tag
    Route::get('edit-category/{id}', [CategoryController::class,'edit']);
    // Update Material information
    Route::post('update-category/{id}', [CategoryController::class,'update']);

    Route::get('create-category', [CategoryController::class,'index']);
// End Operations on Categories

// Start Operations on Materials Tags
    Route::post('tag-material/{id}', [TagsController::class,'add']);
    Route::get('tagm-delete/{id}', [TagsController::class,'deleteTag']);
// End Operations on Materials Tagsmn

// Start Operations on Materials
    Route::get('view-material/{name}', [MaterialsController::class,'view']);
    Route::post('view-material/add-url/{id}', [UrlsController::class,'create']);
    Route::get('delete-url/{id}', [UrlsController::class,'delete']);
    Route::post('view-material/update-url/{id}', [UrlsController::class,'update']);
// End Operations on Materials

// Start Search operation
    Route::post('search-material', [MaterialsController::class,'search']);
    Route::get('search-tag/{tag}', [MaterialsController::class,'searchTag']);
// End Search operation
