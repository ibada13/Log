<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class PostsController extends Controller
{
    public static function index(){
        $posts = Posts::with('comments')->get();
        return view('layout.index',[
           'posts'=>$posts,
            ]);
    }
    public static function show(Posts $post){
        $post = Posts::with('comments')->find($post->id);
        //   dd($post);
        
                return view('layout.show',[
                    'post'=>$post,
                ]);
    }

}
