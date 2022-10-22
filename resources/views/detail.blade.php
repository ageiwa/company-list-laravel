@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/detail-page.css">
    <link rel="stylesheet" href="/styles/form.css">
@endsection
@section('title', $company->name)

@section('content')
    <section class="panel">
        <div class="container">

            <div class="panel__group panel__group_left">
                <h2 class="panel__company-name">{{ $company->name }}</h2>

                <select class="panel__select" name="fieldId" id="select-field">
                    @foreach ($company->toField as $fields)
                        <option class="panel__option" value="{{ $fields->id }}">{{ $fields->field }}</option>
                    @endforeach
                </select>

            </div>

            <div class="panel__group panel__group_right">

                <div class="panel__group-wrap panel__group-wrap_left">
                    <button class="panel__btn" id="show-form-comment">+</button>
                    <button class="panel__btn" id="hide-form-comment">-</button>
                </div>

                <div class="panel__group-wrap">
                    <p class="panel__comment-text">Комментарии:</p>
                    <p class="panel__comment-count">0</p>
                </div>
    
            </div>

        </div>
    </section>

    <section class="comments">

        <form class="form form-comment_hide" id="form-add-comment">
            <h2 class="form__header">Коментарий</h2>
            <textarea class="form__textarea" name="text_com"></textarea>
            <input class="form__submit" type="submit" value="Добавить">
        </form>

        <div class="container" id="comments-list">

        </div>

    </section>

    @section('scripts')
        <script src="/scripts/showHideFormComment.js"></script>
        <script src="/scripts/createComment.js"></script>
    @endsection
@endsection