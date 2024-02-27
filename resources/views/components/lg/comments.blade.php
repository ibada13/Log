@props(['post'])

@php

    $comments = $post['comments'];
@endphp

<div onclick=" myclose({{ $post->id }})" style="display: none"
    class="p-3 fixed h-screen w-screen bg-teal-400 top-0 left-0 bg-opacity-30 justify-center items-center"
    id={{ 'modalcontainer' . $post->id }}>


        <div id={{ 'mod' . $post->id }} tabindex="-1" aria-hidden="true" class="w-3/4 h-3/4 bg-cyan-600 rounded-xl flex flex-col" style="display:none;">
            <div class="flex flex-col  h-1/6  w-full rounded-xl bg-red-400 items-end justify-center">
                <button onclick="toggle({{$post->id}})" class=" text-center  mr-2 text-4xl bg-lime-400"> &times;</button>
            </div>

            <div class="p-4  space-y-4 overflow-y-scroll  rounded-xl h-5/6 ">
                @isset($comments)
                    @unless (count($comments) == 0)
                        @foreach ($comments as $comment)
                            <x-md.comment :comment="$comment" id="default-modal" />
                        @endforeach
                    @else
                        there is no comments
                    @endunless
                @endisset
            </div>
            <!-- Modal footer -->

        

    </div>
</div>


