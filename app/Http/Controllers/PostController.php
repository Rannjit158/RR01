<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:posts,email',
            'password' => 'required|string|min:6'
        ]);

       $posts = Post::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('post.index', compact('posts'))->with('success', ' created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:posts,email,' . $post->id,
        ]);

        $post->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('post.index')->with('success', ' updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', ' deleted successfully.');
    }
}
