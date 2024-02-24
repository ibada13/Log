@extends('app')

@section('content')
    @foreach ($posts as $post)
    <br>
    <h1> content : {{$post['content']}}</h1>
    <br>
    <h4>topcomment:{{$post['topcomment']['content']}}</h4>
     likes:{{$post['topcomment']['likes']}}

    @endforeach    





@endsection
