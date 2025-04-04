@extends('layouts.master')

@section('title')
    Home || خانه  
@endsection

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-20">
    <div class="container mx-auto text-center">
        <!-- Heading -->
        <h1 class="text-5xl font-extrabold mb-6">Welcome to MyApp</h1>
        <p class="text-lg mb-8">
            Manage your tasks efficiently and stay organized with our intuitive platform.
        </p>

        <!-- Call to Action -->
        <a href="#features" class="bg-gray-700 text-white px-8 py-3 rounded-lg text-lg font-bold hover:bg-gray-600 transition">
            Get Started
        </a>
    </div>
</div>

<!-- Features Section -->
<div id="features" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">Our Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <div class="mb-4">
                    <svg class="h-12 w-12 text-gray-700 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4m0 0v6m6-6v6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Easy to Use</h3>
                <p class="text-gray-600">
                    Our platform is designed with simplicity in mind, making it easy for anyone to use.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <div class="mb-4">
                    <svg class="h-12 w-12 text-gray-700 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m0 0L3 10m6-7l6 7" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Stay Organized</h3>
                <p class="text-gray-600">
                    Keep track of your tasks and deadlines effortlessly with our tools.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <div class="mb-4">
                    <svg class="h-12 w-12 text-gray-700 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Collaborate</h3>
                <p class="text-gray-600">
                    Work with your team seamlessly and achieve your goals together.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- New Section 1 -->
<div id="benefits" class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">Why Choose Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Reliable</h3>
                <p class="text-gray-600">
                    Our platform is built to ensure reliability and uptime for all users.
                </p>
            </div>

            <!-- Benefit 2 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Secure</h3>
                <p class="text-gray-600">
                    We prioritize your data security with advanced encryption methods.
                </p>
            </div>

            <!-- Benefit 3 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Scalable</h3>
                <p class="text-gray-600">
                    Our platform grows with your needs, ensuring seamless scalability.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- New Section 2 -->
<div id="testimonials" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">What Our Users Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <p class="text-gray-600 italic">
                    "This platform has completely transformed the way I manage my tasks!"
                </p>
                <h3 class="text-lg font-bold text-gray-800 mt-4">- John Doe</h3>
            </div>

            <!-- Testimonial 2 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <p class="text-gray-600 italic">
                    "The simplicity and efficiency of this tool are unmatched."
                </p>
                <h3 class="text-lg font-bold text-gray-800 mt-4">- Jane Smith</h3>
            </div>

            <!-- Testimonial 3 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <p class="text-gray-600 italic">
                    "I love how easy it is to collaborate with my team using this platform."
                </p>
                <h3 class="text-lg font-bold text-gray-800 mt-4">- Alex Johnson</h3>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="bg-gray-800 text-white py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-lg mb-8">
            Join thousands of users who are staying organized and productive with MyApp.
        </p>
        <a href="#signup" class="bg-gray-700 text-white px-8 py-3 rounded-lg text-lg font-bold hover:bg-gray-600 transition">
            Sign Up Now
        </a>
    </div>
</div>
@endsection