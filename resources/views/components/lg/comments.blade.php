
@props(['post'])

@php

$comments = $post['comments'];
@endphp

<!-- Modal toggle -->
{{-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}
  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full
  <!-- Main modal -->
<div  onclick="(e) => myclose(e, {{ $post->id }})" style="display: none" class="p-3 fixed h-screen w-screen bg-teal-400 top-0 left-0 bg-opacity-30 justify-center items-center" id={{"modalcontainer".$post->id}}>

      <div id={{"mod".$post->id}} tabindex="-1" aria-hidden="true" class=" h-3/4 bg-red-500" style="display:none;" >


            <!-- Modal body -->
            <div class="p-4  space-y-4 overflow-y-auto h-full" style="overflow-y: scroll">
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

