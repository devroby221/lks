<?php

use App\Models\Post;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"

    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "about",
        "name" => "Robiatul adawiyah",
        "email" => "Robi@gmail.com",
        "image" => "cecilion.jpg",
    ]);

});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

//halaman single kedua

Route::get('posts/{slug}', function($slug) {


    return view('post', [
        "title" => "single post",
         "post" =>Post::find($slug)
    ]);
});



Route::get('/login',[LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register',[RegisterController::class, 'index']);

Route::post('/register',[RegisterController::class, 'store']);




