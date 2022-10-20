@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/detail-page.css">
@endsection
@section('title', $company->name)

@section('content')
    <section class="panel">
        <div class="container">
            <div class="panel__group">
                <h2 class="panel__company-name">{{ $company->name }}</h2>
                <select>
                    @foreach ($company->toField as $fields)
                        <option>{{ $fields->field }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>
@endsection