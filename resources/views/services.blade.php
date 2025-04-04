@extends('layouts.master')

@section('title')
    Services || خدمات
@endsection

@section('content')
<!-- Services Header Section -->
<div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-6">Our Services</h1>
        <p class="text-lg mb-8">
            Discover the wide range of services we offer to help you stay organized and productive.
        </p>
    </div>
</div>

<!-- Services List Section -->
<div class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">What We Offer</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="p-6 border rounded-lg shadow-lg bg-white hover:shadow-2xl transition">
                <div class="mb-4">
                    <svg class="h-12 w-12 text-gray-700 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4m0 0v6m6-6v6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Task Management</h3>
                <p class="text-gray-600">
                    Simplify your workflow with our intuitive task management tools.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="p-6 border rounded-lg shadow-lg bg-white hover:shadow-2xl transition">
                <div class="mb-4">
                    <svg class="h-12 w-12 text-gray-700 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m0 0L3 10m6-7l6 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Collaboration</h3>
                <p class="text-gray-600">
                    Work seamlessly with your team and achieve your goals together.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="p-6 border rounded-lg shadow-lg bg-white hover:shadow-2xl transition">
                <div class="mb-4">
                    <svg class="h-12 w-12 text-gray-700 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Analytics</h3>
                <p class="text-gray-600">
                    Gain insights into your productivity with detailed analytics.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">Why Choose Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="p-6 border rounded-lg shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Reliability</h3>
                <p class="text-gray-600">
                    Our services are built to ensure reliability and uptime for all users.
                </p>
            </div>

            <!-- Benefit 2 -->
            <div class="p-6 border rounded-lg shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Security</h3>
                <p class="text-gray-600">
                    We prioritize your data security with advanced encryption methods.
                </p>
            </div>

            <!-- Benefit 3 -->
            <div class="p-6 border rounded-lg shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Scalability</h3>
                <p class="text-gray-600">
                    Our platform grows with your needs, ensuring seamless scalability.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="bg-gray-800 text-white py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-lg mb-8">
            Explore our services and see how we can help you achieve your goals.
        </p>
        <a href="/contact" class="bg-gray-700 text-white px-8 py-3 rounded-lg text-lg font-bold hover:bg-gray-600 transition">
            Contact Us
        </a>
    </div>
</div>
@endsection