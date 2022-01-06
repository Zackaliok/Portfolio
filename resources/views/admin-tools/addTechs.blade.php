@extends('layouts.admin')

@section('content')
    <form action="{{route('create.tech')}}" method="POST">
        @csrf

        <input name="name" type="text" placeholder="Nom">
        <input name="url" type="text" placeholder="URL">
        <input type="submit">
    </form>
@endsection
