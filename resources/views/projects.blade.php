@extends('layouts.app')


@section('content')


    <div style="background-image: url('https://images.unsplash.com/photo-1487180144351-b8472da7d491?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;"
         class="flex flex-col align-middle">

        <h1 class="text-white text-center text-9xl font-semibold" style="padding-top: 1em;">Mes Projets</h1>

        <div class="flex justify-around">
            <!-- MONOPOLY CARD -->
            <div class="min-h-screen flex flex-col justify-center ">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/projects/monopoly.jpg"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Monopoly</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>Copie virtuelle de mon vieux jeu de plateau (en francs)</p>
                                    <p>
                                        <a href="https://github.com/Zackaliok/Monopoly" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>
                                </div>
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

                            <img src="/medias/projects/isn.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Scratchly</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>Jeu éducatif d'initiation à l'algorithmie </p>
                                    <p>
                                        <a href="https://github.com/Zackaliok/ProjetISN" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-around">
            <!-- MARATHON CARD -->
            <div class="min-h-screen flex flex-col justify-center ">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/projects/marathon.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">MARATHON WEB</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>Fake site de streaming réalisé en 2 jours</p>
                                    <p>
                                        <a href="https://github.com/Zackaliok/marathon21" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>
                                </div>
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

                            <img src="/medias/projects/Sokoban.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Sokoban</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>Jeu du Sokoban avec PyQt5 </p>
                                    <p>
                                        <a href="https://github.com/Toopla/Sokoban" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-around">
            <!-- MARATHON CARD -->
            <div class="min-h-screen flex flex-col justify-center ">
                <div class="relative  sm:max-w-xl sm:mx-auto">
                    <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                        <div class="max-w-md mx-auto flex flex-col items-center">

                            <img src="/medias/projects/refonte.png"/>

                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <p class="text-center text-white">Refonte de site</p>
                                </div>
                                <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                    <p>Refonte d'un site statique </p>
                                    <p>
                                        <a href="https://github.com/Zackaliok/Projet-Tutore-Semestre-1" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>




@endsection
