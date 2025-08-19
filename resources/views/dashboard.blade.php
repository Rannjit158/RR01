@extends('layouts.guest')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 shadow rounded">
    <h2 class="text-2xl font-bold">Welcome, {{ Auth::user()->name }} </h2>
    <p class="m-4 text-yellow-400 text-2xl">Your email is {{Auth::user()->email}}</p>
    <p class="mt-2">You are logged in!</p>

    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit"
        class="bg-red-600 text-white px-4 py-2 rounded">Logout</button>
    </form>
</div>
@endsection

