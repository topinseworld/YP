@extends('lauout.index')
@section('main')
    <form action="{{ route('login') }}">
        <h1>LOgin</h1>
        @csrf
        <label>email</label>
        <input type="email" name="email">
        <label>password</label>
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
@endsection