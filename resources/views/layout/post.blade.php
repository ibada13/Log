@extends('app')
@section('content')
    
title :{{$post['title']}}
id :  {{$post['id']}}
@foreach ($post['comments'] as $comment)
<br>
{{$comment['id']}}
<br>
{{$comment['comment']}}
<br>
{{$comment['like']}}
@endforeach
@endsection
