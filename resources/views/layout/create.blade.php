@extends('app')


@section('content')
    <form action="/posts" method="POST">
        @csrf
        <h4 class="text-red-500">hello there </h4>
        <textarea name="content" id="" cols="30" rows="10" placeholder="content">  </textarea>
        <button type="submit">share</button>

    </form>
@endsection
