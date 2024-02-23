<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post['title']}}</title>
</head>
<body>
    title :{{$post['title']}}
    id :  {{$post['id']}}
    @foreach ($post['comments'] as $comment)
        <br>
        {{$comment['id']}}
        <br>
        {{$comment['comment']}}
        <br>
        {{$comment['like']}}
    @endforeach
</body>
</html>