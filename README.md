 ![トップ画面](https://user-images.githubusercontent.com/106688656/193538445-ebaa86ba-fe77-4352-895a-4fc08ed8277e.PNG)


## 概要
このアプリは１台の共有しているパソコンに対して予約を登録、管理できるものです。カレンダー画面から予約をすることができ他の予約状況が視覚的にわかった上で予約をすることができます。また、自身の予約した内容はマイページから確認することができます。

## 使用言語、環境
使用言語：Javascript、PHP、Vue
フレームワーク：Laravel 9.22.1

## 使い方
・まず初めにログインします。
テストアカウントとして下記を用意させていただいております。

・テスト用アカウント
<br>
  名前：山田太郎
<br>
  メールアドレス：59rhbfjdjern2@gmail.com
<br>
  パスワード：85Takjbfro
・新規登録の場合は"新規登録の方はこちら"をクリックしてください。

### ログイン画面
![ログイン](https://user-images.githubusercontent.com/106688656/193541543-5d39c4d6-1612-4f1b-a58d-8695ba48ff61.PNG)
### 新規登録画面
![新規登録](https://user-images.githubusercontent.com/106688656/193541584-2cd1a8f5-bdb7-40a6-ae10-89cc09af382f.PNG)


### 予約の仕方
１．トップ画面から予約管理画面に行きます。
<br>
2.weekボタンを押して、希望の予約日時の範囲をドラッグして選択します。
<br>
予約のイベント名、備考を入力します。ただ、備考は他者には見えないようになっています。
<br>
これで予約はできました。

### 予約の削除の仕方
トップ画面から予約管理画面に行きます。
<br>
削除したい予約をクリックして削除することができます。

### マイページ
マイページはトップ画面に左上のリンクから行くことができ、自身の既にしてある予約内容を確認することができます。

## こだわったポイント
・カレンダー形式のサイトにすることで予約状況を視覚的に分かりやすくしました。
<br>
・入力項目の備考は他者には見えず、自身のマイページからのみ閲覧可能になっています。そのため、実際にパソコンを利用する時にどのようなことを行うのか、詳細をメモすることができます。
<br>
・トップページに利用方法や注意事項を記載することで初めてそのサイトを扱う方でも利用できるようにしました。

## 今後の計画
今後は実際の運用の中でユーザーの意見を踏まえて、利用のしやすいように改善していこうと考えています。また、予約内容の編集機能を加えたいと考えています。

## 著者
松井　智哉

## 参考文献
https://fullcalendar.io/
<br>
https://readouble.com/laravel/
