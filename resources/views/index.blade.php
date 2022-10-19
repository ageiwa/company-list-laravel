@extends('layouts.base')

@section('title', 'Главная')

@section('content')
    <section class="companies">
        <div class="container">

            @foreach ($companies as $company)
            <div class="company">
                <h2 class="company__name">{{ $company->name }}</h2>
                <p class="company__info">{{ $company->info }}</p>
                <a class="company__link" href="{{ route('detail', ['company' => $company->id]) }}">Подробнее</a>
            </div>
            @endforeach

        </div>

        <button class="companies__add-button">Добавить компанию</button>
        <form class="companies__add-form">
            @csrf
            <div class="add-form__container">
                <input type="text" name="name" placeholder="Название">
                <input type="number" name="inn" placeholder="ИНН">
                <textarea name="info" placeholder="Информация о компании"></textarea>
                <input type="text" name="gen_director" placeholder="Генеральный директор">
                <input type="text" name="address" placeholder="Адрес">
                <input type="tel" name="tel" placeholder="Телефон">
            </div>
            <input type="submit" value="Добавить">
        </form>
    </section>

    <script src="/scripts/script.js"></script>
@endsection