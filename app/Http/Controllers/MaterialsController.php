<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Materials;
use App\Models\Tags;
use App\Models\TagsMaterial;
use App\Models\Types;
use App\Models\Urls;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    // Получить информации о материалах
    public function main(){
        $search_check = null;
        $materials = Materials::all();
        return view('list-materials', compact('materials','search_check'));
    }

    // Страница для добавления нового материала
    public function index(){
        $check = null;
        $types = Types::all();
        $categories = Categories::all();
        return view('create-material', compact('types','categories','check'));
    }

    // Редактировать выбранного материала
    public function edit($id){
        $check = 1;
        $material = Materials::where('id', $id)->first();

        $types = Types::all();
        $categories = Categories::all();

        return view('create-material', compact('types','categories','material','check'));
    }

    // Создать нового материала
    public function create(Request $request){
        $material = new Materials();
        $material->type = $request->type;
        $material->category = $request->category;
        $material->name = $request->name;
        $material->author = $request->author;
        $material->description = $request->description;
        $material->save();

        return redirect('/');
    }

    // Обновить информацию о материале
    public function update(Request $request, $id = null){
        $material = Materials::where('id', $id)->first();
        $material->type = $request->type;
        $material->category = $request->category;
        $material->name = $request->name;
        $material->author = $request->author;
        $material->description = $request->description;
        $material->save();
        return redirect('/');
    }

    // Просмотр материала
    public function view($name){

        $material = Materials::where('name', $name)->first();
        $type = Types::where('id', $material->type_id)->first();
        $category = Categories::where('id', $material->category_id)->first();
        $tags = Tags::all();
        $urls = null;
        if(Urls::where('material_id', $material->id)->exists())
        {
            $urls = Urls::where('material_id', $material->id)->get();
        }

        return view('view-material', compact('material','type','category','tags','urls'));
    }

    // Удалить выбранный материал
    public function delete($id){

        $material = Materials::where('id', $id)->first();
        $material->delete();

        if(TagsMaterial::where('material_id', $id)->exists()){
            $tags = TagsMaterial::where('material_id', $id)->get();
            $tags->delete();
        }

        return redirect('/');
    }

    // Поиск материалов по (названию, автору, типу, категории)
    public function search(Request $request){

        $$search_check = null;
        $search = $request->input('search');
        $materials = Materials::query()->where('name', 'LIKE', "%{$search}%")->orWhere('author', 'LIKE', "%{$search}%")->orWhere('type', 'LIKE', "%{$search}%")->orWhere('category', 'LIKE', "%{$search}%")->get();

        return view('list-materials', compact('materials','$search_check'));
    }

    // Поиск материалов по тегу
     public function searchTag($tag){

        $search_check = 1;
        $tag = Tags::where('tag', $tag)->first();
        $materials = TagsMaterial::where('tag_id', $tag->id)->get();
        return view('list-materials', compact('materials', 'search_check'));
    }
}
