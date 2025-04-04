@extends('layouts.master')

@section('title')
    Contact || تماس با ما
@endsection

@section('content')
<!-- Contact Us Section -->
<div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold mb-6">Contact Us</h1>
        <p class="text-lg mb-8">
            Have questions or need help? Feel free to reach out to us. We're here to assist you!
        </p>
    </div>
</div>

<!-- Contact Form Section -->
<div class="py-20 bg-gray-100">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Contact Information -->
        <div class="text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Get in Touch</h2>
            <p class="text-gray-600 mb-6">
                You can contact us through the following methods:
            </p>
            <ul class="space-y-4 text-gray-600">
                <li><strong>Email:</strong> support@myapp.com</li>
                <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                <li><strong>Address:</strong> 123 Main Street, City, Country</li>
            </ul>
        </div>

        <!-- Contact Form -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Send Us a Message</h2>
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-gray-800 font-bold mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700" placeholder="Enter your name" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-800 font-bold mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700" placeholder="Enter your email" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-800 font-bold mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="bg-gray-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-gray-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="bg-gray-800 text-white py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">We'd Love to Hear From You</h2>
        <p class="text-lg mb-8">
            Whether you have a question about features, pricing, or anything else, our team is ready to answer all your questions.
        </p>
        <a href="/" class="bg-gray-700 text-white px-8 py-3 rounded-lg text-lg font-bold hover:bg-gray-600 transition">
            Back to Home
        </a>
    </div>
</div>
@endsection