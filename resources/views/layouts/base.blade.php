<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <div class="navbar__group">
                <a class="navbar__link" href="{{ route('index') }}">Главная</a>

                @guest
                <a class="navbar__link" href="{{ route('login') }}">Вход</a>
                <a class="navbar__link" href="{{ route('register') }}">Регистрация</a>
                @endguest

                @auth
                <p>{{ auth()->user()->name }}</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input class="navbar__link" type="submit" value="Выход">
                </form>   
                @endauth
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="/scripts/script.js"></script>
</body>
</html>