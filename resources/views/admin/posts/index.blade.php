<x-app-layout>
    <div class="container">
        <h1>Posts List</h1>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-left">Content</th>
                    <th class="py-3 px-6 text-left">Author</th>
                    <th class="py-3 px-6 text-left">Time Created</th> <!-- New Time Created Column -->
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $post->id }}</td>
                        <td class="py-3 px-6 text-left">{{ $post->title }}</td>
                        <td class="py-3 px-6 text-left">{{ Str::limit($post->content, 50) }}</td>
                        <td class="py-3 px-6 text-left">
                            {{ $post->user->name ?? $post->user->email ?? 'Unknown' }} 
                            ({{ $post->user->role == 'admin' ? 'Admin' : 'User' }})
                        </td>
                        <td class="py-3 px-6 text-left">
                            {{ $post->created_at->format('Y-m-d H:i:s') }} <!-- Display created time -->
                        </td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $posts->links() }} <!-- Added pagination below the table -->
        </div>
    </div>
</x-app-layout>
