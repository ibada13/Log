<?php

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

Route::get('/posts',function(){
    return view('posts',[
       'posts'=>Posts::all(),
        ]);
});


Route::get('/post/{id}',function(int $id){
    return view('post',[
        'post'=>Posts::find_get($id),
        ]);
});