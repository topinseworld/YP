<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>header</h2>
        <ul>
            @guest
                <a href="{{ route('showRegister') }}">Register</a>
                <a href="{{ route('showLogin') }}">Login</a>
            @endguest
        </ul>
    </header>

    <section>
        @yield('main')

        @if (session('error'))
            <div>
                {{ session('error') }}
            </div>
        @endif
        
        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
        
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    </section>

    <footer>
        footer 
    </footer>
</body>
</html>