<?php
use Illuminate\Support\Facades\Route;
$name = Route::currentRouteName();
?>

<nav class="bg-slate-100 shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-center">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="{{route('welcome')}}" class="flex items-center py-4 px-2">
                        <img src="medias/logo2.png" alt="Logo" class="h-12 w-12 mr-2" />
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{route('welcome')}}" class="py-4 px-10 <?php if ($name == 'welcome') echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">Home</a>
                    <a href="{{route('projects')}}" class="py-4 px-10 <?php if ($name == 'projects') echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">Projects</a>
                    <a href="{{route('technologies')}}" class="py-4 px-10 <?php if ($name == 'technologies') echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">My technologies</a>
                    <a href="{{route('contact.show')}}" class="py-4 px-10 <?php if ($name == 'contact.show' || $name == 'send.email')  echo "text-green-500 border-green-500 border-b-4"; else echo "text-gray-500";?> font-semibold hover:text-green-500 transition duration-300">Contact Us</a>
                    <a href="https://github.com/Zackaliok/Portfolio"
                       class="flex flex-row border border-green-500 rounded-lg px-3 py-2 shadow">
                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="font-size: 1.2em;"><path d="M7 5C7 3.89543 7.89543 3 9 3C10.1046 3 11 3.89543 11 5C11 5.74028 10.5978 6.38663 10 6.73244V14.0396H11.7915C12.8961 14.0396 13.7915 13.1441 13.7915 12.0396V10.7838C13.1823 10.4411 12.7708 9.78837 12.7708 9.03955C12.7708 7.93498 13.6662 7.03955 14.7708 7.03955C15.8753 7.03955 16.7708 7.93498 16.7708 9.03955C16.7708 9.77123 16.3778 10.4111 15.7915 10.7598V12.0396C15.7915 14.2487 14.0006 16.0396 11.7915 16.0396H10V17.2676C10.5978 17.6134 11 18.2597 11 19C11 20.1046 10.1046 21 9 21C7.89543 21 7 20.1046 7 19C7 18.2597 7.4022 17.6134 8 17.2676V6.73244C7.4022 6.38663 7 5.74028 7 5Z" fill="currentColor"></path></svg>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="font-size: 1.1em;"><path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"></path></svg>
                    </a>
                </div>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
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
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="flex flex-col items-center py-4">
            <li><a href="{{route('welcome')}}" class="block text-sm text-center px-2 py-4 <?php if ($name == 'welcome') echo "text-green-500 border-green-500"; else echo "text-gray-500";?> hover:bg-green-500 transition duration-300">Home</a></li>
            <li><a href="{{route('projects')}}" class="block text-sm text-center px-2 py-4 <?php if ($name == 'projects') echo "text-green-500 border-green-500"; else echo "text-gray-500";?> hover:bg-green-500 transition duration-300">Projects</a></li>
            <li><a href="{{route('technologies')}}" class="block text-sm text-center px-2 py-4 <?php if ($name == 'technologies') echo "text-green-500 border-green-500"; else echo "text-gray-500";?> hover:bg-green-500 transition duration-300">Technologies</a></li>
            <li><a href="{{route('contact.show')}}" class="block text-sm text-center px-2 py-4 <?php if ($name == 'contact.show') echo "text-green-500 border-green-500"; else echo "text-gray-500";?> hover:bg-green-500 transition duration-300">Contact Us</a></li>
            <li>
                <a href="https://github.com/Zackaliok/Portfolio"
                   class="flex flex-row self-center border border-green-500 rounded-lg w-12 px-2 py-2 shadow">
                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="font-size: 1.2em;"><path d="M7 5C7 3.89543 7.89543 3 9 3C10.1046 3 11 3.89543 11 5C11 5.74028 10.5978 6.38663 10 6.73244V14.0396H11.7915C12.8961 14.0396 13.7915 13.1441 13.7915 12.0396V10.7838C13.1823 10.4411 12.7708 9.78837 12.7708 9.03955C12.7708 7.93498 13.6662 7.03955 14.7708 7.03955C15.8753 7.03955 16.7708 7.93498 16.7708 9.03955C16.7708 9.77123 16.3778 10.4111 15.7915 10.7598V12.0396C15.7915 14.2487 14.0006 16.0396 11.7915 16.0396H10V17.2676C10.5978 17.6134 11 18.2597 11 19C11 20.1046 10.1046 21 9 21C7.89543 21 7 20.1046 7 19C7 18.2597 7.4022 17.6134 8 17.2676V6.73244C7.4022 6.38663 7 5.74028 7 5Z" fill="currentColor"></path></svg>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="font-size: 1.1em;"><path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"></path></svg>
                </a>
            </li>
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
