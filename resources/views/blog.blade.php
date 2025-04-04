<!-- filepath: c:\Users\MatinHasanpour\Desktop\Laravel-Project\todo-app\resources\views\blog.blade.php -->
@extends('layouts.master')

@section('title')
    Blog || وبلاگ
@endsection

@section('content')
<div class="container mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-blue-800 mb-8 text-center">Our Blog</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Blog Post 1 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/dog1.png') }}" alt="Blog Post 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Blog Post Title 1</h2>
                <p class="text-sm text-gray-600 mt-2">This is a short description of the blog post. It gives a brief overview of the content.</p>
                <a href="#" class="text-blue-500 hover:underline mt-4 block">Read More</a>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/dog2.png') }}" alt="Blog Post 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Blog Post Title 2</h2>
                <p class="text-sm text-gray-600 mt-2">This is a short description of the blog post. It gives a brief overview of the content.</p>
                <a href="#" class="text-blue-500 hover:underline mt-4 block">Read More</a>
            </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('images/cat1.png') }}" alt="Blog Post 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">Blog Post Title 3</h2>
                <p class="text-sm text-gray-600 mt-2">This is a short description of the blog post. It gives a brief overview of the content.</p>
                <a href="#" class="text-blue-500 hover:underline mt-4 block">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection