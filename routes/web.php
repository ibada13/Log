<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/welcome',function(){
    return view('welcome',[
        'title'=>'this is title',
        'value'=>123,
        'comments'=>[
            [
               'id'=>1,
               'comment'=>'this first commment',
               'like'=>20,
            ],[
               'id'=>2,
               'comment'=>'this second commment',
               'like'=>201,
            ],[
               'id'=>3,
               'comment'=>'this third commment',
               'like'=>2450,
            ]   
           ]
        ]);
});