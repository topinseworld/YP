@extends('layout.index')

@section('main')
    <form action="{{ route('login') }}" method="POST">
        <h1>Login</h1>
        @csrf
        <label>email</label>
        <input type="email" name="email">
        <label>password</label>
        <input type="password" name="password">
        
        <input type="submit" value="login">
    </form>
@endsection