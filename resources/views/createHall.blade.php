@extends('admin.index')
@section('title', 'Создать зал')

@section('content')
<div>
    <h2>Создать зал</h2>
    @if (session('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{ route('storeHall') }}" method="POST">
        <div>
            <label for="">Имя зала</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="">кол-во рядов</label>
            <input type="number" name="rows" id="rows">
        </div>
        <div>
            <label for="">кол-во мест в ряду</label>
            <input type="number" name="seats" id="seats">
        </div>
        <button type="submit">Сздать зал</button>
        <a href="{{ route('halls.index') }}">Отмена</a>
    </form>
</div>
@endsection