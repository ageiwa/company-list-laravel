<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/styles/base.css">
    <link rel="stylesheet" href="/styles/navbar.css">
    @yield('styles')
    <link rel="stylesheet" href="/styles/css-breakpoints.css">
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <div class="navbar__group">
                <a class="navbar__link" href="{{ route('index') }}">КОМПАНИИ</a>
            </div>
            <div class="navbar__group">
                @guest
                <a class="navbar__link navbar__login" href="{{ route('login') }}">Вход</a>
                <a class="navbar__link navbar__register" href="{{ route('register') }}">Регистрация</a>
                @endguest

                 @auth
                <p class="navbar__username">{{ auth()->user()->name }}</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input class="navbar__link" type="submit" value="Выход">
                </form>   
                @endauth

            </div>
        </div>
    </nav>

    @yield('content')

    @yield('scripts')
</body>
</html>