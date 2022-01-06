@extends('layouts.admin')

@section('content')
    <h1>HELLO WORLD</h1>

    <form method="POST">
        @csrf

        <div>
            <label for="username">Username</label>
            <input name="username" type="text" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input name="password" type="password" required>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
@endsection
