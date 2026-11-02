<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <header>
        <h2>header</h2>
        <nav>
            <ul><a href="{{ route('showHalls') }}">halls</a></ul>
            <ul><a href="{{ route('showGenres') }}">genres</a></ul>
            <ul><a href="{{ route('showMovies') }}">movies</a></ul>
        </nav>
            
            
            
        
        
        <form action="{{ route ('logout') }}" method="POST">
        @csrf
        <button type="submit" >Logout</button>
    </form>
    </header>

    <section>
        @yield('main')
        <h1>Admin</h1>
    </section>
    
    <footer>footer</footer>
</body>
</html>