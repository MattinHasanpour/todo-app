{{-- filepath: c:\Users\MatinHasanpour\Desktop\Laravel-Project\todo-app\resources\views\todos\index.blade.php --}}
@extends('layouts.master')

@section('title')
    Todo List || لیست وظایف
@endsection

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full my-7 max-w-5xl mx-auto bg-white shadow-md rounded-lg p-8">
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h3 class="text-2xl font-bold text-gray-800">Todo List</h3>
            <a href="{{ route('todos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                Create
            </a>
        </div>

        <table class="min-w-full bg-white border border-gray-300 rounded-lg text-center">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-3 px-4 border-b border-gray-400">ID</th>
                    <th class="py-3 px-4 border-b border-gray-400">Image</th>
                    <th class="py-3 px-4 border-b border-gray-400">Title</th>
                    <th class="py-3 px-4 border-b border-gray-400">Description</th>
                    <th class="py-3 px-4 border-b border-gray-400">Catygory</th>
                    <th class="py-3 px-4 border-b border-gray-400">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todos as $todo)
                <tr class="hover:bg-gray-100">
                    <td class="py-3 px-4 border-b border-gray-300">{{ $todo->id }}</td>
                    <td class="py-3 px-4 border-b border-gray-300">
                        <img src="{{ asset('/images/' . $todo->image) }}" alt="Todo Image" class="w-20 h-20 rounded-md mx-auto">
                    </td>
                    <td class="py-3 px-4 border-b border-gray-300">{{ $todo->title }}</td>
                    <td class="py-3 px-4 border-b border-gray-300">{{ $todo->description }}</td>
                    <td class="py-3 px-4 border-b border-gray-300">{{ $todo->category_id }}</td>
                    <td class="py-3 px-4 border-b border-gray-300">
                        <a href="{{ route('todos.show', ['todo' => $todo->id]) }}" class="bg-yellow-500 mx-1 text-white px-3 py-1 rounded-md text-sm hover:bg-yellow-600 transition">
                            Show
                        </a>
                        <form action="" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            @if ($todo->Status)
                                <button disabled type="submit" class="cursor-pointer bg-green-600 mx-1 w-24 text-white px-3 py-1 rounded-md text-sm hover:bg-green-700 transition text-center">
                                    Completed 
                                </button>
                            @else
                                <a href="{{ route('todos.completed', ['todo'=>$todo->id]) }}" class="cursor-pointer bg-blue-600 mx-1 w-24 text-white px-3 py-1 rounded-md text-sm hover:bg-blue-700 transition flex items-center justify-center">
                                    Done? 
                                </a>      
                            @endif

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $todos->links('todos.pagination') }}
    </div>
</div>

@if (session('success'))
<div class="fixed inset-0 bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md w-full">
        <h3 class="text-lg font-bold text-green-600 mb-4">Success</h3>
        <p class="text-gray-700">{{ session('success') }}</p>
        <a href="{{ route('todos') }}">
            <button 
                onclick="document.querySelector('.fixed').remove()" 
                class="cursor-pointer mt-4 w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                Close
            </button>
        </a>
    </div>
</div>
@endif
@endsection