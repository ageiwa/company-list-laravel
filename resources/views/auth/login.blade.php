@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/form.css">
@endsection
@section('title', 'Вход')

@section('content')
    <div class="container">
        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="form__header">Вход</h2>
            <div class="form__container">
                <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Электронная почта">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form__container">
                <input id="password" type="password" class="form__input @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Пароль">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form__container">
                <input class="form__input-check" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form__check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <button type="submit" class="form__submit">Войти</button>

        </form>
    </div>
@endsection
