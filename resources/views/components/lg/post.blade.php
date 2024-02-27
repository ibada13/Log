@props(['post'])


<div class=" h-min bg-green-400 m-3 ">

    <br>
    <div class="text-center">

        content : {{ $post['content'] }}
    </div>
    <br>
    like : {{ $post['likes'] }}

    <br>
    <x-lg.comments :post='$post'/>

    <div class=" flex justify-between">
        <button class=" text-center w-8 h-1/6 btn btn-bleu">like</button>
        <button onclick="toggle({{$post->id}})" class=" text-center w-8 h-1/6 btn btn-bleu" type="button" data-modal-target="#default-modal"
            >comment</button>
        <button class=" text-center w-8 h-1/6 btn btn-bleu"></button>

    </div>
    <div class=" h-1/5 bg-cyan-600  text-center " aria-hidden="true" tabindex="-1" id={{"mod".$post->id}}>test heree</div>
</div>