@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <title>マイページ画面</title>
    </head>
    <body>
        <h1>マイページ画面</h1>
        <form action="/" method="">
            @csrf
            <h2>お客様情報</h2>
            <div class="name">
                <p>氏名</p>
                <p class = 'name'>{{ $my_user->name }}</p>
            </div>
            <div class="email">
                <p>E-mail adress</p>
                <p class = 'email'>{{ $my_user->email }}</p>
            </div>
            <h2>現在の予約</h2>
            @foreach ($my_schedules as $my_schedule)
            <div class="title">
                <p>タイトル</p>
                <p class = 'title'>{{ $my_schedule->event_name }}</p>
            </div>
             <div class="body">
                <p>内容</p>
                <p class = 'body'>{{ $my_schedule->body }}</p>
            </div>
            <div class="start_date">
                <P>開始日時</P>
                <p class = 'start_date'>{{ $my_schedule->start_date }}</p>
            </div>
              <div class="end_date">
                <P>終了日時</P>
                <p class = 'end_date'>{{ $my_schedule->end_date }}</p>
            </div>
            @endforeach
        </form>
        <br>
        <div class="back">[<a href="/">Topに戻る</a>]</div>
    </body>
</html>
@endsection