@extends('layouts.app')


@section('content')


    <div style="background-image: url('https://images.unsplash.com/photo-1487180144351-b8472da7d491?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;"
         class="flex flex-col align-middle">

        <h1 class="text-white text-center text-9xl font-semibold" style="padding-top: 1em;">Mes Projets</h1>

        <div class="flex justify-around">

            @foreach($projects as $project)
                <div class="min-h-screen flex flex-col justify-center ">
                    <div class="relative  sm:max-w-xl sm:mx-auto">
                        <div class="relative px-4   shadow-lg sm:rounded-3xl sm:p-20 bg-clip-padding bg-opacity-70" style="backdrop-filter: blur(20px);">
                            <div class="max-w-md mx-auto flex flex-col items-center">

                                <img src="{{$project->url}}"/>

                                <div class="divide-y divide-gray-200">
                                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <p class="text-center text-white">{{$project->name}}</p>
                                    </div>
                                    <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                        <p>{{$project->resume}}</p>
                                        <p>
                                            <a href="{{$project->link}}" class="text-cyan-600 hover:text-cyan-700"> See it &rarr; </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>




@endsection
