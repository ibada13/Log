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
Route::get('/',[PostsController::class,'index']);



Route::get('/top',[PostsController::class,'top']);

Route::post('/posts',[PostsController::class,'store']);

Route::get('/posts/create',[PostsController::class,'create']);

Route::get('/posts/{post}',[PostsController::class,'show']);