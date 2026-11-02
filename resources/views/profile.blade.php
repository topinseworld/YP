@extends('layout.index')
@section('main')
    <form action="{{ route ('logout') }}" method="POST">
        @csrf
        <button type="submit" >Logout</button>
    </form>



    <h1>Profile</h1>
@endsection