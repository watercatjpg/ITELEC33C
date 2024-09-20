<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                <p class="mt-4">{{ $post->content }}</p>
                <p class="mt-4 text-sm text-gray-500">Posted on: {{ $post->created_at->format('M d, Y') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
