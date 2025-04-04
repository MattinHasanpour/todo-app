@extends('layouts.master')

@section('title')
    About || درباره ما
@endsection

@section('content')
<!-- About Us Section -->
<div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-6">About Us</h1>
        <p class="text-lg mb-8">
            Welcome to MyApp! We are dedicated to helping you stay organized and productive with our intuitive task management platform.
        </p>
    </div>
</div>

<!-- Mission and Vision Section -->
<div class="py-20 bg-gray-100">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Mission -->
        <div class="text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Mission</h2>
            <p class="text-gray-600">
                Our mission is to empower individuals and teams to achieve their goals by providing a simple and effective task management solution.
            </p>
        </div>
        <!-- Vision -->
        <div class="text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Vision</h2>
            <p class="text-gray-600">
                We envision a world where everyone can stay organized and productive, no matter how complex their tasks are.
            </p>
        </div>
    </div>
</div>

<!-- History Section -->
<div class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">Our History</h2>
        <p class="text-gray-600 text-lg mb-8">
            Founded in 2020, MyApp started as a small project to help individuals manage their tasks. Over the years, we have grown into a trusted platform used by thousands of users worldwide.
        </p>
    </div>
</div>

<!-- Core Values Section -->
<div class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">Our Core Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Integrity</h3>
                <p class="text-gray-600">
                    We believe in honesty and transparency in everything we do.
                </p>
            </div>
            <!-- Value 2 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Innovation</h3>
                <p class="text-gray-600">
                    We strive to bring innovative solutions to our users.
                </p>
            </div>
            <!-- Value 3 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Excellence</h3>
                <p class="text-gray-600">
                    We are committed to delivering the best experience possible.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="bg-gray-100 py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">Meet Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-bold text-gray-800">John Doe</h3>
                <p class="text-gray-600">CEO & Founder</p>
            </div>
            <!-- Team Member 2 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-bold text-gray-800">Jane Smith</h3>
                <p class="text-gray-600">Product Manager</p>
            </div>
            <!-- Team Member 3 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-white hover:shadow-2xl transition">
                <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-bold text-gray-800">Alex Johnson</h3>
                <p class="text-gray-600">Lead Developer</p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-12">What Our Users Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <p class="text-gray-600 italic">
                    "This platform has completely transformed the way I manage my tasks!"
                </p>
                <h3 class="text-lg font-bold text-gray-800 mt-4">- John Doe</h3>
            </div>
            <!-- Testimonial 2 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-gray-100 hover:shadow-2xl transition">
                <p class="text-gray-600 italic">
                    "The simplicity and efficiency of this tool are unmatched."
                </p>
                <h3 class="text-lg font-bold text-gray-800 mt-4">- Jane Smith</h3>
            </div>
            <!-- Testimonial 3 -->
            <div class="p-6 border border-gray-300 rounded-md shadow-lg bg-gray-100 hover:shadow-2xl transition">
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
        <h2 class="text-3xl font-bold mb-6">Join Our Journey</h2>
        <p class="text-lg mb-8">
            Be a part of our mission to make task management simple and effective for everyone.
        </p>
        <a href="#contact" class="bg-gray-700 text-white px-8 py-3 rounded-lg text-lg font-bold hover:bg-gray-600 transition">
            Contact Us
        </a>
    </div>
</div>
@endsection