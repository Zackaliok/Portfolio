@extends('layouts.app')


@section('content')

    <div class="flex flex-col"
        style="background-image: url('https://images.unsplash.com/photo-1525896650794-60ad4ec40d0e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'); background-repeat: no-repeat; background-attachment: fixed">

        <h1 class="text-white text-center text-9xl" style="padding-top: 1em;">Skillset</h1>


        <div class="flex justify-center">
            <!-- PYTHON CARD -->
            <div class="min-h-screen  flex flex-col justify-center px-10">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-python.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Python</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some Python</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GIT CARD -->
            <div class="min-h-screen py-6 flex flex-col justify-center px-10">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 py-10  shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-git.svg" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">GIT</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some GIT</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-center">
            <!-- HTML/CSS CARD -->
            <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 py-10  shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">HTML/CSS</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some HTML/CSS</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some SQL</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-center">
            <!-- JAVA CARD -->
            <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4 py-10  shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">JAVA</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some JAVA</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
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

                            <img src="/medias/techs/logo-.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Javascript</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some Javascript</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-center">
            <!-- PHP CARD -->
            <div class="min-h-screen flex flex-col justify-center ">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/techs/logo-.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">PHP</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some PHP</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
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

                            <img src="/medias/techs/logo-.png" height="96px" width="96px"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Laravel</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>See which projects with some Laravel</p>
                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> Let's go &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>






    <h1 class="text-red-500">Tools I use</h1>
    <br>

@endsection
