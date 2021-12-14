<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
class ArticlesController extends Controller
{
    public function show($id){
        return view('article', [
            'Article' => Articles::find($id)
        ]);
    }
}
