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

        <form class="companies__add-form add-form_disable">
            @csrf
            <h2 class="companies__header">Добавить компанию</h2>
            <div class="add-form__container">
                <input class="add-form__input input-control" type="text" name="name" placeholder="Название">
                <input class="add-form__input input-control" type="number" name="inn" placeholder="ИНН">
                <textarea class="add-form__textarea input-control" name="info" placeholder="Информация о компании"></textarea>
                <input class="add-form__input input-control" type="text" name="gen_director" placeholder="Генеральный директор">
                <input class="add-form__input input-control" type="text" name="address" placeholder="Адрес">
                <input class="add-form__input input-control" type="tel" name="tel" placeholder="Телефон">
            </div>
            <input class="add-form__btn" type="submit" value="Добавить">
        </form>
    </section>
@endsection