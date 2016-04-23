@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/new/user') }}">
    {{ csrf_field() }}
    <label>Nome:</label>
    <p><input type="text" name="name" placeholder="name"></p>
    <label>E-mail:</label>
    <p><input type="email" name="email" placeholder="email"></p>
    <label>Username:</label>
    <p><input type="username" name="username" placeholder="username"></p>
    <label>Password:</label>
    <p><input type="password" name="password" placeholder="password"></p><Br>
    <button type="submit">Add</button>
</form> 
@endsection
