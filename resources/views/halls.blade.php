@extends('admin.index')
@section('main')
    <form action="{{ route('indexHall') }}" method="post">
        <h2>Halls</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rows</th>
                    <th>Seats</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $halls as $hall )
                    <tr>
                        <td>{{$hall->name}}</td>
                        <td>{{$hall->rows}}</td>
                        <td>{{$hall->seats}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Залов не найдено</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </form>
@endsection