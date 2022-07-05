<?php

namespace App\Http\Controllers;

use App\Models\Urls;
use Illuminate\Http\Request;

class UrlsController extends Controller
{
    // Add new URL
    public function create(Request $request, $id){

        $urls = new Urls();
        $urls->material_id = $id;
        $urls->signature = $request->signature;
        $urls->url = $request->url;
        $urls->save();

        return redirect()->back();
    }

    // Add new URL
    public function update(Request $request, $id){

        $urls = Urls::where('id', $id)->first();
        $urls->material_id = $urls->material_id;
        $urls->signature = $request->signature;
        $urls->url = $request->url;
        $urls->update();

        return redirect()->back();
    }
    // Delete current URL
    public function delete( $id){

        $urls = Urls::where('id', $id)->first();
        $urls->delete();

        return redirect()->back();
    }
}
