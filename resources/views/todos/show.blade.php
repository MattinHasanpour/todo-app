@extends('layouts.master')

@section('title')
    Todo List || لیست وظایف
@endsection

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="flex justify-between items-center py-3 border border-gray-100 px-4">
            <h1 class="text-2xl font-semibold">Todo</h1>
            <a href="{{ route('todos') }}">
                <button class="bg-black cursor-pointer text-white px-5 py-2 rounded-md">Back</button>
            </a>
        </div>

        <div class="relative w-full h-96 bg-cover bg-center">
            <!-- عکس بزرگتر -->
            <img src="{{ asset('images/' . $todo->image) }}" alt="Todo Image" class="w-full opacity-35 h-96 object-cover rounded-lg">
            
            <!-- عکس کوچکتر (روی عکس بزرگتر) -->
            <div class="absolute bottom-4 right-4 w-32 h-32 border-4 border-white shadow-lg rounded-lg">
                <img src="{{ asset('images/' . $todo->image) }}" alt="Todo Image" class="w-full h-full object-cover rounded-lg">
            </div>
        </div>
        

        <!-- Table Section -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col items-center">
                    <label for="" class="text-xl mb-2">Title</label>
                    <input disabled value="{{ $todo->title }}" type="text" class="px-2 bg-gray-100 cursor-no-drop border w-full lg:w-64 md:w-84 py-1 rounded-lg">
                </div>
                <div class="flex flex-col items-center">
                    <label for="" class="text-xl mb-2">Catygory</label>
                    <input disabled value="{{ $todo->category->title }}" type="text" class="px-2 bg-gray-100 cursor-no-drop border w-full lg:w-64 md:w-84 py-1 rounded-lg">
                </div>
                <div class="flex flex-col items-center">
                    <label for="" class="text-xl mb-2">Status</label>
                    <input disabled value="{{ $todo->Status ? 'Contact' : 'pending...'}}" type="text" class="px-2 bg-gray-100 cursor-no-drop border w-full lg:w-64 md:w-84 py-1 rounded-lg">
                </div>
            </div>

            <div class="mt-6">
                <div class="grid grid-cols-1">
                    <label for="" class="text-xl text-center mb-2">Description</label>
                    <textarea disabled class="border cursor-no-drop bg-gray-100 p-2 mx-auto w-full lg: rounded-lg" rows="4">{{ $todo->description }}</textarea>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 py-4 gap-4 text-center">
                    <a href="{{ route('todos.edit', ['todo'=>$todo->id]) }}" class="text-white cursor-pointer rounded-lg bg-amber-400 hover:bg-amber-500 py-2">Edit</a>
                    <form action="{{ route('todos.destroy', ['todo'=>$todo->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white cursor-pointer w-full rounded-lg bg-red-600 hover:bg-red-700 py-2">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection