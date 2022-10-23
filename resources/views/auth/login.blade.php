@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/form.css">
@endsection
@section('title', 'Вход')

@section('content')
    <section class="login">
        <div class="container">
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="form__header">Вход</h2>
                <div class="form__container">
                    <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Электронная почта">
    
                    @error('email')
                        <div class="form__container" role="alert">
                            <p class="invalid-feedback">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
    
                <div class="form__container">
                    <input id="password" type="password" class="form__input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Пароль">
    
                    @error('password')
                        <div class="form__container" role="alert">
                            <p class="invalid-feedback">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
    
                <div class="form__container">
                    <input class="form__input-check" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
    
                    <label class="form__check-label" for="remember">
                        {{ __('Запомнить меня') }}
                    </label>
                </div>
    
                <button type="submit" class="form__submit">Войти</button>
    
            </form>
        </div>
        <div class="container">
            <p class="login__text-or">ИЛИ</p>
            <a class="login__link" href="{{ route('register') }}">Зарегистрироваться</a>
        </div>
    </section>
@endsection
