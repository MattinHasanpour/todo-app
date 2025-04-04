<footer class="bg-white text-gray-800 py-12 shadow-2xl border-t-1 border-gray-300">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <!-- About Section -->
        <div>
            <h3 class="text-xl font-bold mb-4">About Us</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Welcome to MyApp, your go-to platform for managing tasks efficiently. Our mission is to provide a seamless and intuitive experience for users to stay organized and productive.
            </p>
        </div>

        <!-- Navigation Links -->
        <div>
            <h3 class="text-xl font-bold mb-4">Quick Links</h3>
            <div class="grid grid-cols-2 gap-4">
                <ul class="space-y-2">
                    <li><a href="/home" class="{{ request()->is('home') ? 'text-blue-800 font-bold hover:text-blue-600' : 'text-gray-600' }} transition hover:text-blue-600">Home</a></li>
                    <li><a href="/about" class="{{ request()->is('about') ? 'text-blue-800 font-bold hover:text-blue-600' : 'text-gray-600' }} transition hover:text-blue-600">About</a></li>
                    <li><a href="/services" class="{{ request()->is('services') ? 'text-blue-800 font-bold hover:text-blue-600' : 'text-gray-600' }} transition hover:text-blue-600">Services</a></li>
                </ul>
                <ul class="space-y-2">
                    <li><a href="/contact" class="{{ request()->is('contact') ? 'text-blue-800 font-bold hover:text-blue-600' : 'text-gray-600' }} transition hover:text-blue-600">Contact</a></li>
                    <li><a href="/blog"  class="{{ request()->is('blog') ? 'text-blue-800 font-bold hover:text-blue-600' : 'text-gray-600' }} transition hover:text-blue-600">Blog</a></li>
                    <li><a href="/faq" class="hover:text-blue-600 transition">FAQ</a></li>
                </ul>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="text-left">
            <h3 class="text-xl font-bold mb-4">Contact Us</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li>
                    <a href="mailto:support@myapp.com" class="hover:text-blue-600">
                        <span class="font-bold">Email:</span> support@myapp.com
                    </a>
                </li>
                <li>
                    <a href="tel:+11234567890" class="hover:text-blue-600">
                        <span class="font-bold">Phone:</span> +1 (123) 456-7890
                    </a>
                </li>
                <li>
                    <a href="https://www.google.com/maps?q=123+Main+Street,+City,+Country" target="_blank" class="hover:text-blue-600">
                        <span class="font-bold">Address:</span> 123 Main Street, City, Country
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="mt-8 border-t border-gray-300 pt-6 text-center text-gray-500 text-sm">
        <span class="text-blue-600">© 2025</span> MyApp. All rights reserved.
    </div>
</footer>