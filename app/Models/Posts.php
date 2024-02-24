<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->hasMany(Comments::class,'post_id');
    }
    public function topcomment(){
        $comments = $this->hasMany(Comments::class,'post_id')->get();
        $topcomment=null;
        $toplikes = 0 ;
        foreach($comments as $comment){
            if($comment->likes>= $toplikes){
                $topcomment = $comment; 
                $toplikes= $comment->likes ;
            }
        }
        return $topcomment;
    }
}
