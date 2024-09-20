<x-app-layout>
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>Posts List</h1>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mb-3">Lists</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold">Create New Post as an Admin</h1>

                <form action="{{ route('admin.posts.store') }}" method="POST" class="mt-6">

                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" id="content" rows="5" class="mt-1 block w-full" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Post</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
