@extends('layouts.master')

@section('title')
    Login || ورود
@endsection

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white text-gray-800 rounded-lg shadow-lg p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>
        <form action="#" method="POST" class="space-y-6">
            @csrf
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700" placeholder="Enter your email" required>
            </div>
            <!-- Password Field -->
            <div>
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700" placeholder="Enter your password" required>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="cursor-pointer w-full bg-gray-800 text-white py-3 rounded-lg font-bold hover:bg-gray-700 transition">
                Login
            </button>
        </form>
        <!-- Additional Links -->
        <div class="mt-6 text-center">
            <p class="text-gray-600">Don't have an account? 
                <a href="/sign" class="text-gray-800 font-bold hover:underline">Sign Up</a>
            </p>
        </div>
    </div>
</div>
@endsection