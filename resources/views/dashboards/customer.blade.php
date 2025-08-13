<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Customer Dashboard</h2>
    </x-slot>

    <div class="p-6">
        <p>Welcome, Customer {{ auth()->user()->name }}!</p>
    </div>
</x-app-layout>
