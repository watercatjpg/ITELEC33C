<x-app-layout>
<div class="container">
        <a href="{{ route('user.posts.create') }}" class="my-4 btn btn-primary mb-3">Create New Post</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ route('user.posts.show', $post->id) }}" class="btn btn-warning">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
