@extends('app')
@section('content')

    <h1 style="text:center;"  class=" text-center">
        hello wrold
    </h1>


    <h1>
        @isset($posts)
            @foreach ($posts as $post)
                <x-lg.post :post="$post" />
            @endforeach
        @else
            <h1>no posts</h1>
        @endisset

    </h1>
    <div >
          {{$posts->links()}}
        </div>
@endsection
