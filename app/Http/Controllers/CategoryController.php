<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
     // Get Categories information
     public function index(){
        $categories = Categories::all();
        return view('list-category', compact('categories'));
    }

    //
    public function create(Request $request){
        $material = new Categories();
        $material->category = $request->category;
        $material->save();
        return redirect('category');
    }

     // Delete Category
     public function delete($id){
        $category = Categories::where('id', $id)->first();
        $category->delete();
        return redirect('category');
    }
}
