@extends('layouts.admin')

@section('content')

    <h1>Liste des techs déjà enregistrées :</h1>
    <ol>
        @foreach($techs as $tech)
            <li>{{$tech->id}}. Name : <b>{{$tech->name}}</b>  |  Url : <b>{{$tech->url}}</b></li>
        @endforeach
    </ol>


    <form action="{{route('update.techs')}}" method="POST">
        @csrf
        <h2>Modifier ou ajouter une technologie</h2>

        <input name="id" type="number" placeholder="Id">
        <input name="name" type="text" placeholder="Nom">
        <input name="url" type="text" placeholder="URL">
        <input type="submit">
    </form>

    <br>
    <a href="{{route('technologies')}}">Aller à l'affichage original</a>
@endsection
