<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5 px-5">
        <form action="{{ route('update',$post->id)}}" method="post" class="justify-content-right mb-5">
            @csrf
            @method('PUT')
            <input type="text" class="form-control mb-3" name="title" placeholder="title" value="{{$post->title}}" required>
            <textarea class="form-control mb-3" name="content" rows="4" placeholder="content" required>{{$post->content}}</textarea>
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </form>
        <hr>
    </div>
</body>
</html>
