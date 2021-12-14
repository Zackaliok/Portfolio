<?php
use Illuminate\Support\Facades\Route;
$name = Route::currentRouteName();
echo $name;
?>
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <!-- Website Logo -->
                <div>
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2" />
                        <span class="font-semibold text-gray-500 text-lg"
                        >Navigation</span
                        >
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg
                            class="w-6 h-6 text-gray-500"
                            x-show="!showMenu"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{route('welcome')}}" class="py-4 px-2 <?php if ($name == 'welcome') echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">Home</a>
                    <a href="{{route('projects')}}" class="py-4 px-2 <?php if ($name == 'projects') echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">Projects</a>
                    <a href="{{route('technologies')}}" class="py-4 px-2 <?php if ($name == 'technologies') echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">My technologies</a>
                    <a href="{{route('contact')}}" class="py-4 px-2 <?php if ($name == 'contact') echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

</nav>


