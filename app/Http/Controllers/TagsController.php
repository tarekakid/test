<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\TagsMaterial;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    // Get Tags
    public function main(){
        $tags = Tags::all();
        return view('list-tag', compact('tags'));
    }

    // Get Types and Categories
    public function index(){
        $check = null;
        return view('create-tag', compact('check'));
    }

    // Add new Tag
    public function create(Request $request){

        if(!Tags::where('tag', $request->tag)->exists()){
            $tag = new Tags();
            $tag->tag = $request->tag;
            $tag->save();
        }

        return redirect('tag');
    }

    // Add new Tag
    public function update(Request $request, $id){
        $tag = Tags::where('id', $id)->first();

        if(!Tags::where('tag', $request->tag)->exists()){
            $tag->tag = $request->tag;
            $tag->save();
        }
        return redirect('tag');
    }

    // Delete current Tag
    public function delete($id){

        $tag = Tags::where('id', $id)->first();
        $tag->delete();

        return redirect('tag');
    }

    // Delete current Tag
    public function edit($id){
        $check = 1;
        $tag = Tags::where('id', $id)->first();
        return view('create-tag', compact('tag','check'));
    }

    // Delete current Tag
    public function add(Request $request){

        $tag_material = new TagsMaterial();
        $tag_material->material_id = $request->material_id;
        $tag_material->tag_id = $request->tag_id;
        $tag_material->save();

        return redirect()->back();
    }

    public function deleteTag($id){

        $tag_material = TagsMaterial::where('id', $id)->first();
        $tag_material->delete();

        return redirect()->back();
    }
}
