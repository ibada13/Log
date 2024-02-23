<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$title ?? ' no title'}}</title>
</head>
<body>
    <h1 style="text:center;">
    hello wrold
    </h1>


    <h1>
      @isset ($posts)
      @foreach ($posts as $post)
          <br>
          title : {{$post['title']}}
          <br>
          like : {{$post['likes']}}
          @php
              
            $comments = $post['comments'] 
          @endphp
          <br>
        comments:
      @unless (count($comments)==0)
      @foreach($comments as $comment)
      
         <br>
         
        {{$comment['id']}}
        {{$comment['comment']}}
        {{$comment['like']}}
         
        
        
        @endforeach 
        @else  
        there is no comments  
        @endunless
        @endforeach
        @else
        <h1>no posts</h1>
        @endisset
        <h1> 
            {{$best['title']}}
        </h1>
      </h1>
    </body>
    </html>