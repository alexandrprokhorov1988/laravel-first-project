@extends('layouts.guestBook')

@section('header')
    <a href="/moderator" class="header__link"><h1 class="header__title">Guestbook</h1></a>
@endsection

@section('message')
    @if(isset($posts))
        @if(isset($session))
            <p class="message-success">Сообщение добавлено {{$session}}</p>
        @endif
        @foreach($posts as $post)
            <div class="message">
                <div class="message__titles">
                    <p class="message__title message__title-user-name">{{$post->name}}</p>
                    <p class="message__title message__title-date">{{$post->date}}</p>
                </div>
                <p class="message__paragraf message__paragraf-text">{{$post->message}}</p>
            </div>
        @endforeach
        <div class="pagination">
            {{$posts->render()}}
        </div>
    @endif
@endsection

@section('footer')
    @if(isset($count))
        <p class="footer__message">Количество сообщений {{$count}}</p>
    @endif
@endsection

@section('formAdd')
    @includeIf('elems.formAdd')
@endsection