<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//postsget:
// $posts->each(function ($post) {
//     $post->topcomment = $post->topcomment();
// });
Route::get('/posts',[PostsController::class,'index']);



Route::get('/top',function(){
    $posts = Posts::all();
    $posts->each(function ($post) {
      
        $post->topcomment = $post->topcomment()->makeHidden(['created_at', 'updated_at','id']);
    });
    return view('layout.topcomment',[
       'posts'=>$posts,
        ]);
});

Route::get('/post/{post}',[PostsController::class,'show']);