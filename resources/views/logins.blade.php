@extends('layouts.guest')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 shadow rounded">
    <h2 class="text-2xl font-bold mb-4">Login</h2>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="block">Email</label>
            <input type="email"
            name="email"
            class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label class="block">Password</label>
            <input type="password"
            name="password"
            class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded">Login</button>
    </form>
    <p class="mt-3 text-sm">Don’t have an account? <a href="{{ route('register') }}" class="text-blue-600">Register</a></p>
</div>
@endsection
