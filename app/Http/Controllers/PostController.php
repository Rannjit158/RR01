<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function userDetail(Request $request)
    {
        // Get input from request or use default values
        $name = $request->name ;
        $email = $request->email ;
        $password = $request->password;

        // Create a new record
        $createdUser = Post::create([
            'name' => 'promod',
            'email' => 'promod@gmail.com',
            'password' => 123
        ]);

        // Get all records
        $allUsers = Post::all();

        // Display all users
        foreach($allUsers as $user) {
         echo "Name: {$user->name}, Email: {$user->email}<br>";
        }
    }
    public function deleteUser()
    {
        $deleted = Post::destroy(24);
        if($deleted) {
            return "Deleted successfully!";
        } else {
            return "No record found for deletion.";
        }
    }

}
