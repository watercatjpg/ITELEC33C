<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {    $posts = Post::paginate(5); // paginate the posts
        return view('admin.posts.index', compact('posts'));

}

    


    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // Create a new post
    Post::create([
        'title' => $validatedData['title'],
        'content' => $validatedData['content'],
        'user_id' => auth()->id(), // Associate the post with the logged-in user
    ]);

    // Redirect back to the list of posts
    return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
}



    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($request->all());
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }
}
