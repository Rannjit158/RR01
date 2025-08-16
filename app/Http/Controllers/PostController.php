<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function create()
    {
        return view('post');
    }


    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:posts,email',
            'password' => 'required|min:6',
         ]);

        Post::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        return redirect()->route('showDetail')->with('success', 'User added successfully!');
    }


    public function showDetail()
    {
        $details = Post::all();
        return view('show', compact('details'));
    }
}
