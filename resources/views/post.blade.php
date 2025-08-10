@extends('layouts.guest')
@section('content')


    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-100 to-white">
        <div class="text-center bg-white p-8 rounded-2xl shadow-lg max-w-md">
            <h1 class="text-4xl font-bold text-blue-700 mb-4">Welcome!</h1>
            <p class="text-gray-600 mb-6">
                We're glad you're here. Start exploring your dashboard or create a new post.
            </p>
            <a href="/dashboard" class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">
                Go to Dashboard
            </a>
        </div>
    </div>
@endsection



