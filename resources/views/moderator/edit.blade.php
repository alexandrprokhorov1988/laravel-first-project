@extends('layouts.guestBook')

@section('header')
    <a href="/all" class="header__link"><h1 class="header__title">Guestbook</h1></a>
@endsection

@section('message')
    @if(isset($posts))
            @foreach($posts as $post)
                    <div class="moder">
                        <div class="message message_place_moder">
                            <p class="message__paragraf moder__message_paragraf">{{$post->message}}</p>
                            <div class="message__titles message__titles_place_moder">
                                <a href="/edit/{{$post->id}}" class="message__button message__button_color_edit">edit</a>
                                <a href="/del/{{$post->id}}"  class="message__button message__button_color_del">delete</a>
                            </div>
                        </div>
                    </div>
            @endforeach
    @endif
@endsection