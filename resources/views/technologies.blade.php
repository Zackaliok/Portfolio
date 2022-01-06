@extends('layouts.app')


@section('content')

    <div class="flex flex-col items-center"
        style="background-image: url('https://images.unsplash.com/photo-1525896650794-60ad4ec40d0e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'); background-repeat: no-repeat; background-attachment: fixed">

        <h1 class="text-white align-middle text-center text-9xl font-semibold" style="padding-top: 1em;">Technologies</h1>

        <div class="flex  justify-around">

            @foreach($techs as $tech)
                <div class="min-h-screen flex flex-col justify-center ">
                    <div class="relative  sm:max-w-xl sm:mx-auto">
                        <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                            <div class="max-w-md mx-auto flex flex-col items-center">

                                <img src="{{$tech->url}}"/>

                                <div class="divide-y divide-gray-200">
                                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <p class="text-center text-white">{{$tech->name}}</p>
                                    </div>

                                    <p>
                                        <a href="#" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>





    <div class=""
         style="background-image: url('https://images.unsplash.com/photo-1586864387789-628af9feed72?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover">
        <h1 class="text-white text-center text-9xl py-4 font-semibold" >Outils</h1>


        <div class="flex flex-wrap justify-around py-10">

            <!-- VS CODE -->
            <div class="py-5 px-5 bg-opacity-70" style="backdrop-filter: blur(20px);">
                <img src="/medias/tools/logo-vs.png">
            </div>

            <!-- Jetbrain -->
            <div class="py-5 px-5 bg-opacity-70" style="backdrop-filter: blur(20px);">
                <img src="/medias/tools/logo-jetbrain.svg" width="96px">
            </div>

            <!-- Linux -->
            <div class="py-5 px-5 bg-opacity-70" style="backdrop-filter: blur(20px);">
                <img src="/medias/tools/logo-linux.png">
            </div>

            <!-- Github -->
            <div class="py-5 px-5 bg-opacity-70" style="backdrop-filter: blur(20px);">
                <img src="/medias/tools/logo-github.svg" width="96px">
            </div>

            <!-- Gitlab -->
            <div class="py-5 px-5 bg-opacity-70" style="backdrop-filter: blur(20px);">
                <img src="/medias/tools/logo-gitlab.png">
            </div>

        </div>

    </div>



@endsection
