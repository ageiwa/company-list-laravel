@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/index-page.css">
    <link rel="stylesheet" href="/styles/form.css">
@endsection

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

        <form class="form form-add_hide" id="form-add">
            @csrf
            <h2 class="form__header">Добавить компанию</h2>
            <div class="form__container">
                <input class="form__input" type="text" name="name" placeholder="Название">
                <input class="form__input" type="number" name="inn" placeholder="ИНН">
                <textarea class="form__textarea" name="info" placeholder="Информация о компании"></textarea>
                <input class="form__input" type="text" name="gen_director" placeholder="Генеральный директор">
                <input class="form__input" type="text" name="address" placeholder="Адрес">
                <input class="form__input" type="tel" name="tel" placeholder="Телефон">
            </div>
            <input class="form__submit" type="submit" value="Добавить">
        </form>
    </section>

    @section('scripts')
        <script src="/scripts/showHideForm.js"></script>
        <script src="/scripts/createCompany.js"></script>
    @endsection
@endsection