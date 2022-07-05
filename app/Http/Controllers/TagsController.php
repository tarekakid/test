<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\TagsMaterial;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    // Получить информации о тегах
    public function main(){
        $tags = Tags::all();
        return view('list-tag', compact('tags'));
    }

    // Страница для добавления нового тега
    public function index(){
        $check = null;
        return view('create-tag', compact('check'));
    }

    // Создать новый тег
    public function create(Request $request){

        if(!Tags::where('tag', $request->tag)->exists()){
            $tag = new Tags();
            $tag->tag = $request->tag;
            $tag->save();
        }

        return redirect('tag');
    }

    // Обновить информацию о теге
    public function update(Request $request, $id){
        $tag = Tags::where('id', $id)->first();

        if(!Tags::where('tag', $request->tag)->exists()){
            $tag->tag = $request->tag;
            $tag->save();
        }
        return redirect('tag');
    }

    // Удалить выбранный тег
    public function delete($id){

        $tag = Tags::where('id', $id)->first();
        $tag->delete();

        return redirect('tag');
    }

    // Редактировать выбранный тег
    public function edit($id){
        $check = 1;
        $tag = Tags::where('id', $id)->first();
        return view('create-tag', compact('tag','check'));
    }

    // Добавить новый тег к материалу
    public function add(Request $request){

        $tag_material = new TagsMaterial();
        $tag_material->material_id = $request->material_id;
        $tag_material->tag_id = $request->tag_id;
        $tag_material->save();

        return redirect()->back();
    }

    // Удалить тег материала
    public function deleteTag($id){

        $tag_material = TagsMaterial::where('id', $id)->first();
        $tag_material->delete();

        return redirect()->back();
    }
}
