<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    // Get Categories information
     public function main(){
        $categories = Categories::all();
        return view('list-category', compact('categories'));
    }

    // Get Categories information
    public function index(){
        $check = null;
        return view('create-category', compact('check'));
    }

    //
    public function create(Request $request){
        $material = new Categories();
        $material->category = $request->category;
        $material->save();
        return redirect('category');
    }

    // Add new Tag
    public function update(Request $request, $id){
        $category = Categories::where('id', $id)->first();

        if(!Categories::where('category', $request->category)->exists()){
            $category->category = $request->category;
            $category->save();
        }
        return redirect('category');
    }

    // Delete current Tag
    public function edit($id){
        $check = 1;
        $category = Categories::where('id', $id)->first();
        return view('create-category', compact('category','check'));
    }

     // Delete Category
     public function delete($id){
        $category = Categories::where('id', $id)->first();
        $category->delete();
        return redirect('category');
    }
}
