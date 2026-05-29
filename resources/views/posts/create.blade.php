<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create posts</title>
</head>

<body>
    <h1>Create Post</h1>

    <!-- when form submits points to store function in PostController -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body" required>{{ old('body') }}</textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>