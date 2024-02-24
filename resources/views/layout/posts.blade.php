@extends('app')
@section('content')
    
<h1 style="text:center;">
  hello wrold
</h1>


    <h1>
      @isset ($posts)
      @foreach ($posts as $post)
      <br>
          content : {{$post['content']}}
          <br>
          like : {{$post['likes']}}
          @php
              
              $comments = $post['comments'] 
              @endphp
          <br>
          comments:
          @isset($comments)
              
          @unless (count($comments)==0)
          @foreach($comments as $comment)
      
      <br>
         
      id :{{$comment['id']}}
      <br>
      content: {{$comment['content']}}
      <br>
      likes :{{$comment['likes']}}
      
      
      
        @endforeach 
        @else  
        there is no comments  
        @endunless
        @endisset
        @endforeach
        @else
        <h1>no posts</h1>
        @endisset

      </h1>

    @endsection