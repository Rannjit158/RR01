@extends('layouts.guest')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-5">Add User</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border p-2 w-full" value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="border p-2 w-full" value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="border p-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add User</button>
    </form>
</div>
@endsection
