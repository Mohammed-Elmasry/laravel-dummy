<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/posts">
        @csrf
        <p><label for="post_name">Post Name:</label><input name="post_name" type="text"></p><br>
        <p><button type="submit">Submit</button></p>
    </form>
</body>
</html>