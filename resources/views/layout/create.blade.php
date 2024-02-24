@extends('app')


@section('content')
    <form action="/posts" method="POST">
        @csrf
        <h4 class=" text-orange-400">hello there </h4><input type="text">
        <textarea name="content" id="" cols="30" rows="10" placeholder="content">  </textarea>
        <button type="submit">share</button>

    </form>
@endsection
