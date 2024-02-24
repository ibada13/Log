@props(['post'])



    <br>
    content : {{ $post['content'] }}
    <br>
    like : {{ $post['likes'] }}
    @php

        $comments = $post['comments'];
    @endphp
    <br>
    comments:
    @isset($comments)

        @unless (count($comments) == 0)
            @foreach ($comments as $comment)
               <x-p-comment :comment="$comment" />
            @endforeach
        @else
            there is no comments
        @endunless
    @endisset






