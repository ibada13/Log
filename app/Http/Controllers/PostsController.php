<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class PostsController extends Controller
{
    public static function index(){
        $posts = Posts::with('comments')->latest()->paginate(4);
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
    public static function top(){
        $posts = Posts::all();
        $posts->each(function ($post) {
          
            $post->topcomment = $post->topcomment();
        });
        return view('layout.topcomment',[
           'posts'=>$posts,
            ]);
    }
    public static function store(Request $req){
        // dd($req);
        $form_fields = $req->validate([
            'content'=>'required',
        ]);
        Posts::create($form_fields);
    
       return redirect('/');
    }



    public static function create(){
        return view('layout.create');
    }
}
