@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/form.css">
@endsection
@section('title', 'Вход')

@section('content')
    <section class="register">
        <div class="container">

            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
    
                <h2 class="form__header">Регистрация</h2>
    
                <div class="form__container">
                    <input id="name" type="text" class="form__input @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Имя">
    
                    @error('name')
                        <div class="form__container" role="alert">
                            <p class="invalid-feedback">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
    
                <div class="form__container">
                    <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Электронная почта">
    
                    @error('email')
                        <div class="form__container" role="alert">
                            <p class="invalid-feedback">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
    
    
                <div class="form__container">
                    <input id="password" type="password" class="form__input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Пароль">
    
                    @error('password')
                        <div class="form__container" role="alert">
                            <p class="invalid-feedback">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
    
                <div class="form__container">
                    <input id="password-confirm" type="password" class="form__input" name="password_confirmation" required
                        autocomplete="new-password" placeholder="Повторите пароль">
                </div>
    
                <button type="submit" class="form__submit">Зарегистрироваться</button>
            </form>
        </div>
    </section>
@endsection
