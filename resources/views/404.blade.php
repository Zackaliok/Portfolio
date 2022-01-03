<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tristan Fumiere</title>
</head>
<body>
    <div class="flex items-center justify-center w-screen h-screen bg-gradient-to-r from-green-600 to-green-400">
        <div class="px-40 py-20 bg-white rounded-md shadow-xl">
            <div class="flex flex-col items-center">
                <h1 class="font-bold text-green-600 text-9xl">404</h1>

                <h6 class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl">
                    <span class="text-red-500">Oops!</span> Page not found
                </h6>

                <p class="mb-8 text-center text-gray-500 md:text-lg">
                    The page you’re looking for doesn’t exist.
                </p>

                <a onclick="window.history.back()"
                   class="px-6 py-2 text-sm font-semibold text-green-800 bg-green-100 hover:cursor-pointer">
                    Go back &#10145;
                </a>
            </div>
        </div>
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>





