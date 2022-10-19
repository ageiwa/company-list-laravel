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
    </section>
@endsection