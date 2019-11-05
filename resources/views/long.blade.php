<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Long Names</title>
</head>
<body>
    <ul>
        @forelse ($posts as $post)
        <li>{{$post->name}}</li>
        @empty
            <h1>No Names</h1>
        @endforelse
    </ul>
</body>
</html>