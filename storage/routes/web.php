<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;

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
   $posts=Post::all();
});
    return view('posts',[
        'posts' => $posts
    ]);

Route::get('posts/{post}', function ($slug) {
    $post=Post::findorfail($slug);

    return view('post' ,[
        'post' => $post
    ]);


});