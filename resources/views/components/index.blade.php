<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($post) ? 'Edit Post' : 'Create Post' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-4">
        <h1>{{ isset($post) ? 'Edit Post' : 'Create New Post' }}</h1>
        <form action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store') }}" method="POST">
            @csrf
            @if(isset($post))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title ?? '' }}" required>
            </div>
            <div class="form-group mt-3">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ $post->content ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">{{ isset($post) ? 'Update Post' : 'Save Post' }}</button>
        </form>
    </div>
</body>
</html>
