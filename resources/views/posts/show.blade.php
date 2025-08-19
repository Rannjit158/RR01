@extends('layouts.guest')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">dpost Details</h2>

    <div class="space-y-3">
        <p><strong>ID:</strong> {{ $post->id }}</p>
        <p><strong>Name:</strong> {{ $post->name }}</p>
        <p><strong>Email:</strong> {{ $post->email }}</p>
        <p><strong>Created At:</strong> {{ $post->created_at}}</p>
    </div>

    <div class="mt-6 flex space-x-2">
        <a href="{{ route('posts.edit', $post->id) }}"
           class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
           Edit
        </a>
        <a href="{{ route('posts.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
           Back
        </a>
    </div>
</div>
@endsection
