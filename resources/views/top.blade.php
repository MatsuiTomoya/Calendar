
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <title>トップ画面</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" href="top.css">
    </head>
    <body>
        <h1 style="text-align:center; text-decoration:underline double;">共有パソコン予約管理システム</h1>
        <div style="text-align:left">
            [<a style="color:blue; text-decoration:underline;" href='/calendar'>予約管理</a>]
            [<a style="color:blue; text-decoration:underline;" href='/my_page'>マイページ</a>]
            [<a style="color:blue; text-decoration:underline;" href='/login'>ログイン</a>]
            [<a style="color:blue; text-decoration:underline;" href='/register'>新規登録</a>]
        </div>
        <h2 style="text-align:left; text-decoration:underline">共有パソコンをご利用のお客様へ</h2>
        
        <div style="text-align:left">
            <div style="text-align:left; border:dotted; border-radius:8px; display:inline-block; background-color:whitesmoke">
                <h3>【予約時のルール】</h3>
                <div>・既に予約が入っていたらその時間は予約はできません</div>
                <div>・予約のイベント(32文字まで)、備考(100文字まで)は必ず入力してください</div>
                <br>
            </div>
    　　</div>
        <br>
        <br>
        <div style="text-align:left">
            <div style="text-align:left; border:dotted; border-radius:8px; display:inline-block; background-color:whitesmoke">
                <h3>【予約登録の仕方】</h3>
                <div>1.予約管理画面に行く</div>
                <div>2.weekボタンを押して希望の日時の範囲をドラッグして選択する</div>
                <div>3.イベント名、備考を入力する</div>
            <br>
            </div>
        </div>
        <br>
        <br>
        <div style="text-align:left">
            <div style="text-align:left; border:dotted; border-radius:8px; display:inline-block; background-color:whitesmoke">
                <h3>【予約削除の仕方】</h3>
                <div>1.予約管理画面に行く</div>
                <div>2.削除したい予約をクリックして削除する</div>
                <br>
            </div>
        </div>
        <br>
        <br>
        <div style="text-align:left">
            <div style="text-align:left; border:dotted; border-radius:8px; display:inline-block; background-color:whitesmoke">
                <h3>【マイページに関して】</h3>
                <div>・マイページではお客様情報、現在の予約が確認できます！</div>
                <br>
            </div>
        </div>
        <!--<div class = 'schedules'>-->
        <!--    @foreach ($schedules as $schedule)-->
        <!--    <div class = 'schedule'>-->
        <!--        <h2 class = 'title'>{{ $schedule->event_name }}</h2>-->
        <!--        <p class = 'body'>{{ $schedule->body }}</h2>-->
        <!--        <p class = 'start_date'>{{ $schedule->start_date->format('Y-m-d G:i') }}</p>-->
        <!--        <p class = 'end_date'>{{ $schedule->end_date->format('Y-m-d G:i') }}</p>-->
        <!--        <p class = 'id'>{{ $schedule->id }}</p>-->
        <!--    </div>-->
        <!--    @endforeach-->
        <!--</div>-->
    </body>
@endsection    
</html>
