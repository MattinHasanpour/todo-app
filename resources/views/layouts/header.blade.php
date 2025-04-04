<header class="bg-white text-gray-800 shadow-md sticky top-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo Section -->
        <div class="flex items-center gap-3">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 left-0 mx-auto md:static h-8 md:h-7 lg:h-10 shrink-0" viewBox="0 0 1020 769">
                    <polygon fill="#4a5565" points="484.8124 560.0603 302.0609 655.3444 238.4124 617.2945 238.4124 462.4662 484.8124 560.0603"></polygon>
                    <polygon fill="#6B7280" points="972.5712 207.8379 484.6647 462.7753 10.7595 275.1003 498.7369 20.1923 972.5712 207.8379"></polygon>
                </svg>
            </a>
        </div>

        <!-- Navigation Links (Desktop) -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="/home" class="text-lg {{ request()->is('home') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition">Home</a>
            <a href="/about" class="text-lg {{ request()->is('about') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition">About</a>
            <a href="/services" class="text-lg {{ request()->is('services') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition">Services</a>
            <a href="/contact" class="text-lg {{ request()->is('contact') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition">Contact</a>
            <a href="/categories" class="text-lg {{ request()->is('categories') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition">Category</a>
            <a href="/todos" class="text-lg {{ request()->is('todos') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition">Todos</a>
        </nav>

        <!-- Call to Action Button (Desktop) -->
        <div class="hidden md:flex items-center gap-4">
            <a href="/login" class="text-lg {{ request()->is('login') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition">Login</a>
            <a href="/sign" class="text-lg {{ request()->is('sign') ? 'bg-blue-800 hover:bg-blue-600' : 'bg-gray-800 hover:bg-gray-600' }} text-white px-6 py-2 rounded-lg transition">
                Sign Up
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden cursor-pointer text-gray-800 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <nav class="flex flex-col items-center gap-4 py-4">
            <div class="grid grid-cols-2">
                <a href="/login" class="text-lg rounded-md {{ request()->is('login') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition w-full border-gray-200 text-center hover:bg-gray-100 py-1 my-0">Login</a>
                <a href="/sign" class="text-lg {{ request()->is('sign') ? 'bg-blue-800 hover:bg-blue-600' : 'bg-gray-800 hover:bg-gray-600' }} text-white px-6 py-2 rounded-lg transition border-b w-full border-gray-200 text-center">
                    Sign Up
                </a>
            </div>
            <a href="/home" class="text-lg {{ request()->is('home') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition border-b w-full border-gray-200 text-center hover:bg-gray-100 py-1 my-0">Home</a>
            <a href="/about" class="text-lg {{ request()->is('about') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition border-b w-full border-gray-200 text-center hover:bg-gray-100 py-1 my-0">About</a>
            <a href="/services" class="text-lg {{ request()->is('services') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition border-b w-full border-gray-200 text-center hover:bg-gray-100 py-1 my-0">Services</a>
            <a href="/contact" class="text-lg {{ request()->is('contact') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition border-b w-full border-gray-200 text-center hover:bg-gray-100 py-1 my-0">Contact</a>
            <a href="/category" class="text-lg {{ request()->is('category') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition border-b w-full border-gray-200 text-center hover:bg-gray-100 py-1 my-0">category</a>
            <a href="/todos" class="text-lg {{ request()->is('todos') ? 'text-blue-800 font-bold' : 'text-gray-600 hover:text-gray-800' }} transition w-full text-center hover:bg-gray-100 py-1 my-0">Todos</a>
        </nav>
    </div>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>