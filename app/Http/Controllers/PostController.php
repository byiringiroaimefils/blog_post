<?php
// Define the namespace for this controller
namespace App\Http\Controllers;
// Import required classes
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
    public function index() {
        $posts = Post::all();  // Execute the query with pagination

        return view('posts.index', compact('posts'));
    }


    public function create() {
        return view('posts.create');
    }

    // Store a newly created post (POST /posts)
    public function store(Request $request) {

        $request->validate([
            'title' => 'required|min:3',    // Title must be at least 3 characters
            'content' => 'required',         // Content is required
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function show(Post $post) {
        // Return the show view with post data
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post) {
        // Return the edit view with post data
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|min:3',    // Title must be at least 3 characters
            'content' => 'required',         // Content is required
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
