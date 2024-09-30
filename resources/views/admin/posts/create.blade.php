<x-app-layout>
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>Posts List</h1>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mb-3">Lists</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold">Create New Post as an Admin</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.posts.store') }}" method="POST" class="mt-6">

                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full @error('title') border-red-500 @enderror" required>
                        @error('title')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" id="content" rows="5" class="mt-1 block w-full @error('content') border-red-500 @enderror" required></textarea>
                        @error('content')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Post</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>