@extends('layouts.master')

@section('title')
    Edit Page
@endsection

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h5 class="text-2xl font-bold text-gray-800">Edit Category</h5>
            <a href="{{ route('category.index') }}" class="bg-gray-800 text-white px-4 py-2 rounded-lg text-sm hover:bg-gray-700 transition flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back
            </a>
        </div>
        <form action="{{ route('category.update',['category'=>$category->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title<span class="text-blue-600">->id={{ $category->id }}</span></label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ $category->title }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-indigo-300 focus:outline-none transition"
                    placeholder="Enter category title">
                <div class="text-red-500 text-sm mt-2">
                    @if ($errors->any())
                        @error('title')
                            <p class="text-red-600">{{ $message }}</p>  
                        @enderror
                    @else
                        <p class="text-white">.</p>
                    @endif
                </div>
            </div>
            <a href="{{ route('category.edit', ['category' => $category->id]) }}">

                <button 
                    type="submit" 
                    class="w-full cursor-pointer bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition font-medium shadow-md hover:shadow-lg">
                    Edit Category
                </button>
            </a>
        </form>
    </div>
</div>

{{-- Modal for Errors --}}
@if ($errors->any())
<div id="error-modal" class="fixed inset-0 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
        <h3 class="text-lg font-bold text-red-600 mb-4">Error</h3>
        @error('title')
            <p class="text-gray-700">{{ $message }}</p>
        @enderror
        <button 
            onclick="document.getElementById('error-modal').remove()" 
            class="cursor-pointer mt-4 w-full bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
            Close
        </button>
    </div>
</div>
@endif

{{-- Modal for Success --}}
@if (session('success'))
<div id="success-modal" class="fixed inset-0 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
        <h3 class="text-lg font-bold text-green-600 mb-4">Success</h3>
        <p class="text-gray-700">{{ session('success') }}</p>
        <a href="{{ route('category.index') }}">
            <button 
                onclick="document.getElementById('success-modal').remove()" 
                class="cursor-pointer mt-4 w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
            Close
            </button>
        </a>
    </div>
</div>
@endif
@endsection