@extends('layouts.master')

@section('title')
    Todo Details || جزئیات وظیفه
@endsection

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="container mx-auto py-10 px-4 sm:px-6 lg:px-8 bg-white shadow-lg rounded-lg">
        <div class="overflow-x-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl my-3 text-blue-800">Categories</h1>
                <a href="#">
                    <button class="text-white bg-neutral-950 hover:bg-neutral-700 cursor-pointer py-1 px-3 rounded-md">
                        <a href="{{ route('category.create') }}">Create</a>
                    </button>
                </a>
            </div>
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-600">#</th>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-600">Title</th>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="border-t border-gray-300">
                        <td class="px-6 py-4 text-center text-sm text-gray-700">{{ $category->id }}</td>
                        <td class="px-6 py-4 text-center text-sm text-gray-700">{{ $category->title }}</td>
                        <td class="px-6 py-4 text-center text-sm text-gray-700">
                            <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="text-white bg-gray-500 hover:bg-gray-600 px-3 py-1 rounded-md">Edit</a> |
                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-500 hover:bg-red-600 py-1 px-3 rounded-md cursor-pointer">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal for Success --}}
@if (session('success'))
<div id="success-modal" class="fixed inset-0 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
        <h3 class="text-lg font-bold text-green-600 mb-4">Success</h3>
        <p class="text-gray-700">{{ session('success') }}</p>
        <button 
            onclick="document.getElementById('success-modal').remove()" 
            class="cursor-pointer mt-4 w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
            Close
        </button>
    </div>
</div>
@endif
@endsection