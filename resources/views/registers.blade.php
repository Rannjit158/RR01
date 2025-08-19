@extends('layouts.guest')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 shadow rounded">
    <h2 class="text-2xl font-bold mb-4">Register</h2>
    <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="block">Name</label>
            <input type="text"
            name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label class="block">Email</label>
            <input type="email"
            class="w-full border p-2 rounded"
            name="email"  required>
        </div>
        <div class="mb-3">
            <label class="block">Password</label>
            <input type="password"
            class="w-full border p-2 rounded"
            name="password"  required>
        </div>
        <div class="mb-3">
            <label class="block">Confirm Password</label>
            <input type="password"
            class="w-full border p-2 rounded"
            name="password_confirmation"  required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Register</button>
    </form>
    <p class="mt-3 text-sm">Already have an account? <a href="{{ route('login') }}" class="text-blue-600">Login</a></p>
</div>
@endsection
