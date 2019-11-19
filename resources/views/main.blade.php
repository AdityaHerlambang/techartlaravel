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
        <form action="{{ route('create')}}" method="POST" class="justify-content-right mb-5">
            @csrf
            <input type="text" class="form-control mb-3" name="title" placeholder="title" required>
            <textarea class="form-control mb-3" name="content" rows="4" placeholder="content" required></textarea>
            <button type="submit" class="btn btn-outline-secondary">Post</button>
        </form>
        <hr>
    </div>
    <div class="container mt-5 px-5">
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ route('edit', $post->id)}}">Edit</a>
                    </div>
                    <h5 class="card-subtitle text-muted">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>

