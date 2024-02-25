@extends('app')


@section('content')
    <form action="/posts" method="POST">
        @csrf
        <h1 class="text-red-500 "  >test there</h1>
        <textarea name="content" id="" cols="30" rows="10" placeholder="content">  </textarea>
        @error('content')
            <p class="text-red-500">{{$message}}</p>
        @enderror
        <button type="submit">share</button>
    </form>
@endsection
