@extends('layouts.guest')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Edit Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name"
                   value="{{ old('name', $post->name) }}"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 p-2" required>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email"
                   value="{{ old('email', $post->email) }}"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 p-2" required>
        </div>

        <!-- Password (optional) -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password (leave blank to keep current)</label>
            <input type="password" id="password" name="password"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 p-2">
        </div>

        <!-- Buttons -->
        <div class="flex space-x-2">
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Update
            </button>
            <a href="{{ route('posts.index') }}"
               class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
               Cancel
            </a>
        </div>
    </form>
</div>
@endsection
