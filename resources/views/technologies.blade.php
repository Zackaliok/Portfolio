@extends('layouts.app')


@section('content')

    <div class="flex flex-col items-center"
        style="background-image: url('https://images.unsplash.com/photo-1525896650794-60ad4ec40d0e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'); background-repeat: no-repeat; background-attachment: fixed">

        <h1 class="text-white align-middle text-center text-9xl font-semibold" style="padding-top: 1em;">Skillset</h1>
        <!--<div class="flex justify-around">-->

        <div class="flex flex-wrap justify-around">


            <!-- MONOPOLY CARD -->
            <div class="min-h-screen flex flex-col justify-center ">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-python.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">PYTHON</p>
                                </div>

                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 py-10  shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-htmlcss.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">HTML/CSS</p>
                                </div>

                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ISN CARD -->
            <div class="min-h-screen  flex flex-col justify-center sm:py-12">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-git.svg" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">GIT</p>
                                </div>

                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PHP CARD -->
            <div class="min-h-screen flex flex-col justify-center ">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-php.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">PHP</p>
                                </div>

                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--</div>-->


        <!--<div class="flex justify-around py-0">-->
            <!-- SQL CARD -->
            <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 py-10  shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-sql.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">SQL</p>
                                </div>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- JAVA CARD -->
            <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 py-10  shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-java.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">JAVA</p>
                                </div>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- JS CARD -->
            <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 py-10  shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-js.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Javascript</p>
                                </div>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LARAVEL CARD -->
            <div class="min-h-screen  flex flex-col justify-center sm:py-12">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-laravel.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Laravel</p>
                                </div>

                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--</div>-->
    </div>




    <div class=""
         style="background-image: url('https://images.unsplash.com/photo-1586864387789-628af9feed72?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover">
        <h1 class="text-white text-center text-9xl font-semibold" style="padding-top: 1em;">Tools I Use</h1>
    </div>



@endsection
