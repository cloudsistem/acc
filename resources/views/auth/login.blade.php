@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ url('/new/login') }}">
        {{ csrf_field() }}
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Senha</label>
        <input type="password" name="password"><br>
        <button type="submit">Login</button>           
    </form>
@endsection
