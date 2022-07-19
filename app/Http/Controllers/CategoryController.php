<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    // Получить информацию о категориях
     public function main(){
        $categories = Categories::all();
        return view('list-category', compact('categories'));
    }

    // Страница добавления новой категории
    public function index(){
        $check = 0;
        return view('create-category', compact('check'));
    }

    // Создать новую категорию
    public function create(Request $request){
        $this->validation($request);

        $material = new Categories();
        $material->category = $request->category;
        $material->save();
        return redirect('category');
    }

    // Обновить информацию о категории
    public function update(Request $request, $id){

        $this->validation($request);

        $category = Categories::where('id', $id)->first();
        if(!Categories::where('category', $request->category)->exists()){
            $category->category = $request->category;
            $category->save();
        }
        return redirect('category');
    }

    // Редактировать выбранную категорию
    public function edit($id){
        $check = 1; //
        $category = Categories::where('id', $id)->first();
        return view('create-category', compact('category','check'));
    }

    // Удалить выбранную категорию
    public function delete($id){
        $category = Categories::where('id', $id)->first();
        $category->delete();
        return redirect('category');
    }

    public function validation(Request $request)
    {
        $request->validate(
            [
                'category' => 'required|string|unique:categories,category',
            ],
            [
                'category.required' => 'Пожалуйста, заполните поле',
                'category.unique' => 'Категория уже существует',
            ]
        );
    }
}
