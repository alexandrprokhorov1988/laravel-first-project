@extends('layouts.guestBook')

@section('header')
    <a href="/all" class="header__link"><h1 class="header__title">Guestbook</h1></a>
@endsection

@section('message')
    <section class="add-form">
        @foreach($posts as $post)
            <form action="" method="post" class="input-form add-form__input-form">
                {{ csrf_field() }}
                <input type="text" name="userName" class="input-form__name" placeholder="name" value="{{$post->name}}">
                <textarea name="message" id="" cols="50" rows="10" class="input-form__message"
                          placeholder="message">{{$post->message}}</textarea>
                <input type="submit" name="submit" class="input-form__button">
            </form>
        @endforeach
    </section>
@endsection