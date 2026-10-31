@extends('lauout.index')
@section('main')
    <form action="{{ route('register') }}">
        <h1>Register</h1>
        @csrf
        <label>Name</label>
        <input type="text" name="full_name">
        <label>email</label>
        <input type="email" name="email">
        <label>password</label>
        <input type="password" name="password">
        <input type="submit" value="Register">
    </form>
@endsection