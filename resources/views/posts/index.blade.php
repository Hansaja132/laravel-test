<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Posts Index</h1>
    <h1>All Posts</h1>

    <!-- In following link it points to create function inside PostController -->
    <a href="{{ route('posts.create') }}">Create New Post</a>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <!-- This is necessary to specify that this form should be treated as a DELETE request(spoofing) -->
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    @endforeach
</body>

</html>