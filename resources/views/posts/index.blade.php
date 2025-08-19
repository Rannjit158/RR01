@extends('layouts.guest')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 sm:mb-0">Users List</h2>
        <a href="{{ route('posts.create') }}"
           class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-700 transition duration-200">
           Add User
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto max-w-full">
        <table class="min-w-full w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-gray-700">ID</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-gray-700">Name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-gray-700">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-gray-700">Created At</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($posts as $post)
                    <tr class="border-b hover:bg-gray-50 transition duration-150">
                        <td class="py-3 px-4">{{ $post->id }}</td>
                        <td class="py-3 px-4">{{ $post->name }}</td>
                        <td class="py-3 px-4">{{ $post->email }}</td>
                        <td class="py-3 px-4">{{ $post->created_at}}</td>
                        <td class="py-3 px-4 flex space-x-2">
                            <!-- Show -->
                            <a href="{{ route('posts.show', $post->id) }}"
                               class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">
                               Show
                            </a>

                            <a href="{{ route('posts.edit', $post->id) }}"
                               class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">
                               Edit
                            </a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
