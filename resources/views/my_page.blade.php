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
        <h1 style="text-align:center; text-decoration:underline double;">共有パソコン予約管理システム</h1>
        <h2 style="text-decoration:underline">マイページ画面</h2>
        <form action="/" method="">
            @csrf
            <h3>【お客様情報】</h3>
            <div style="border:dotted; border-radius:8px; display:inline-block; background-color:whitesmoke">
                <div class="name">
                    <p class = 'name'>名前：{{ $my_user->name }}</p>
                </div>
                <div class="email">
                    <p class = 'email'>Email adress：{{ $my_user->email }}</p>
                </div>
            </div>
            <br>
            <br>
            <h3>【現在の予約】</h3>
            @foreach ($my_schedules as $my_schedule)
            <div style="border:dotted; border-radius:8px; display:inline-block; background-color:whitesmoke">
                <div class="title">
                    <p class = 'title'>イベント名：{{ $my_schedule->event_name }}</p>
                </div>
                <div class="body">
                    <p class = 'body'>備考：{{ $my_schedule->body }}</p>
                </div>
                <div class="start_date">
                    <p class = 'title'>開始日時：{{ $my_schedule->start_date->format('Y-m-d G:i') }}</p>
                </div>
                <div class="end_date">
                    <p class = 'end_date'>終了日時：{{ $my_schedule->end_date->format('Y-m-d G:i') }}</p>
                </div>
            </div>
            <br>
            <br>
            @endforeach
        </form>
        <br>
        <div class="back" style="color:blue; text-decoration:underline;">[<a href="/">Topに戻る</a>]</div>
    </body>
</html>
@endsection