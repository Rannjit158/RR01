@extends('layouts.guest')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-4 sm:mb-0">Users List</h2>
        <a href="{{ route('post.create') }}"
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
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($details as $key => $detail)
                    <tr class="border-b hover:bg-gray-50 transition duration-150">
                        <td class="py-3 px-4">{{ $detail->id }}</td>
                        <td class="py-3 px-4">{{ $detail->name }}</td>
                        <td class="py-3 px-4">{{ $detail->email }}</td>
                        <td class="py-3 px-4">{{ $detail->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-500">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
