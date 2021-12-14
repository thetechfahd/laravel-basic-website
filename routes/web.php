<?php

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

use App\Http\Controllers\ArticlesController;
use Illuminate\View\ViewName;

Route::get('/', function (){
    $Articles = App\Articles::all();
    return view('welcome',[
        'Articles' => App\Articles::all()
    ]);
    
});
Route::get('/blog', function (){
    $Articles = App\Articles::all();
    return view('blog',[
        'Articles' => App\Articles::all()
    ]);
    
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/articles', function (){
    return view('articles');
});


Route::get('/article/{article}', 'ArticlesController@show');

