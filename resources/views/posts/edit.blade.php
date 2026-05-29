<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>

<body>
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body" required>{{ old('body', $post->body) }}</textarea>
        </div>
        <button type="submit">Update Post</button>
    </form>
</body>

</html>