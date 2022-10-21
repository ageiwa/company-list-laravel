@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/detail-page.css">
    <link rel="stylesheet" href="/styles/form.css">
@endsection
@section('title', $company->name)

@section('content')
    <section class="panel">
        <div class="container">

            <div class="panel__group">
                <h2 class="panel__company-name">{{ $company->name }}</h2>

                <select name="fieldId" id="select-field">
                    @foreach ($company->toField as $fields)
                        <option value="{{ $fields->id }}">{{ $fields->field }}</option>
                    @endforeach
                </select>

            </div>

        </div>
    </section>

    <section class="comments">

        <form class="form" id="form-add-comment">
            <h2 class="form__header">Коментарий</h2>
            <textarea class="form__textarea" name="text_com"></textarea>
            <input class="form__submit" type="submit" value="Добавить">
        </form>

        <div class="container">

        </div>

    </section>

    @section('scripts')
        <script src="/scripts/createComment.js"></script>
    @endsection
@endsection