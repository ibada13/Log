@props(['post'])


<div class=" h-min bg-green-400 m-3 ">

    <br >
    <div class="text-center">

        content : {{ $post['content'] }}
    </div>
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
                <x-lg.comment :comment="$comment" />
            @endforeach
        @else
            there is no comments
        @endunless
    @endisset
    <div class=" flex justify-between">
        <button class=" text-center w-8 h-1/6 btn btn-bleu">like</button>
        <button class=" text-center w-8 h-1/6 btn btn-bleu">comment</button>
        <button class=" text-center w-8 h-1/6 btn btn-bleu"></button>

    </div>
</div>
