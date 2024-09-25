<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('user.posts.create') }}" class="my-4 btn btn-primary mb-3">Create New Post</a>


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                <p class="mt-4">{{ $post->content }}</p>
                <p class="mt-4 text-sm text-gray-500">Posted on: {{ $post->created_at->format('M d, Y') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
