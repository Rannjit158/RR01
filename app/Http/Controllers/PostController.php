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


    public function userDetail(Request $request)
    {

        Post::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect to show all users
        return redirect()->route('showDetail')->with('success', 'User added successfully!');
    }

    // Display all users
    public function showDetail()
    {
        $details = Post::all();
        return view('show', compact('details')); // Your show view
    }
}
