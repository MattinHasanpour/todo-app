@extends('layouts.master')

@section('title')
    Create Todo
@endsection

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-2xl mx-auto bg-white shadow-md rounded-lg p-8">
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h3 class="text-2xl font-bold text-gray-800">Edit New Todo</h3>
            <a href="{{ route('todos') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                Back
            </a>
        </div>
        
        <form action="{{ route('todos.update', ['todo' => $todo->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            <!-- Image Upload -->
            <div>
                <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
                <input type="file" id="image" name="image" class="cursor-pointer w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">
                @error('image')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input 
                type="text" 
                id="title" 
                name="title" 
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300" 
                value="{{ $todo->title }}">
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-gray-700 font-medium mb-2">Category</label>
                <select id="category" name="category" class="cursor-pointer w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">
                    @foreach ($categories as $category)
                        <option {{ $todo->category_id == $category->id ? 'selected' : ' ' }} value="{{ $category->id }}">{{ $category->title }}</option>    
                    @endforeach
                </select>
                @error('category')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea id="description" name="description" class="w-full border border-gray-300 rounded-lg px-3 py-2 h-28 focus:ring focus:ring-blue-300"> {{ $todo->description }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="cursor-pointer w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Edit
            </button>
        </form>
    </div>
</div>
@endsection