@extends('layouts.admin')

@section('content')

    <table class="table-auto border m-5">
        <caption class="py-2">Outils enregistrées</caption>
        <thead>
        <tr class="bg-slate-800">
            <th class="text-white">Image</th>
            <th class="text-white">ID</th>
            <th class="text-white">Name</th>
            <th class="text-white">Url</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tools as $tool)
            <tr>
                <td class="border"><img src="{{$tool->url}}" width="96px"></td>
                <td class="border">{{$tool->id}}</td>
                <td class="border">{{$tool->name}}</td>
                <td class="border">{{$tool->url}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="border rounded-lg p-5 mx-5 divide-y divide-gray-200">
        <h2 class="py-2 text-3xl">Modifier ou ajouter un outil</h2>

        <form action="{{route('update.tools')}}" method="POST" class="py-2">
            @csrf
            <input class="border rounded-lg p-2"
                   name="id" type="number" placeholder="Id">
            <input class="border rounded-lg p-2"
                   name="name" type="text" placeholder="Nom">
            <input class="border rounded-lg p-2"
                   name="url" type="text" placeholder="URL">
            <input class="border border-blue-700 bg-blue-700 text-white rounded-lg p-2"
                   type="submit">
        </form>
        <div class="bg-red-300 border-red-600 rounded-lg">
            <p class="py-2 px-2 text-red-600">Attention à l'id !</p>
        </div>

    </div>



    <br>
    <a href="{{route('technologies')}}">Aller à l'affichage original</a>
@endsection
