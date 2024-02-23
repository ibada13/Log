<?php

namespace App\Models;
class Posts {
    public static function all(){
        return  [[
            'id'=>1,
            'title'=>'this is title1',
            'likes'=>123,
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
            ],
            [
                'id'=>2,
                'title'=>'this is title3',
                'likes'=>123,
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
                    'like'=>755,
                    ]   
                    ]
                ],[
                    'id'=>3,
                    'title'=>'this is title4',
                    'likes'=>123,
                    'comments'=>[
                        [
                            'id'=>1,
                            'comment'=>'this first commment',
                            'like'=>20,
                        ],[
                       'id'=>2,
                       'comment'=>'this second commment',
                       'like'=>16,
                    ]
                        ]
                        ],
                        [
                        'id'=>4,      
                        'title'=>'this is title4',
                        'likes'=>123,
                        'comments'=>[]
                    ]];
    }
    public static function find_get(int $id){
        $posts = self::all();
        foreach($posts as $post ){
            if($post['id'] == $id){
                return $post['id'];
            }
        }
        return ['title'=>'not found 404'];
    }
}

?>