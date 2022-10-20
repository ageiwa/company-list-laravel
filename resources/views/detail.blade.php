@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/detail-page.css">
@endsection
@section('title', $company->name)

@section('content')
    <section class="panel">
        <div class="container">
            <div class="panel__group">
                <h2>{{ $company->name }}</h2>
            </div>
        </div>
    </section>
@endsection