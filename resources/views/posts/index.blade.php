<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Posts Index</p>
    <p>All Posts</p>
    
    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
    @endforeach
</body>

</html>