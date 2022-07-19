<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    // Создать новую ссылку
    public function create(Request $request, $id){
        $this->validation($request);

        $links = new Links();
        $links->material_id = $id;
        $links->signature = $request->signature;
        $links->link = $request->link;
        $links->save();

        return redirect()->back();
    }

    // Обновить информацию о ссылке
    public function update(Request $request, $id){
        $this->validation($request);

        $links = Links::where('id', $id)->first();
        $links->material_id = $links->material_id;
        $links->signature = $request->signature;
        $links->link = $request->link;
        $links->update();

        return redirect()->back();
    }

    // Удалить выбранную ссылку
    public function delete( $id){

        $links = Links::where('id', $id)->first();
        $links->delete();

        return redirect()->back();
    }

    public function validation(Request $request)
    {
        $request->validate(
            [
                'link' => 'required|url',
            ],
            [
                'link.required' => 'Пожалуйста, заполните поле',
                'link.url' => 'Пожалуйста, введите правильную ссылку',
            ]
        );
    }
}
