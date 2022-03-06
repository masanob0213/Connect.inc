<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<style>
  .date {
    margin: 20px 80px;
    padding-top: 20px;
  }

  .header-logout {
    display: inline-block;
  }

  .button-logout {
    border-radius: 5px;
    font-weight: bold;
    font-size: 12px;
    color: #1F2937;
    border: 2px solid #1F2937;
    background-color: white;
    padding: 10px 40px;
    cursor: pointer;
    transition: 0.4s;
    white-space: nowrap;
  }

  .date-title {
    font-size: 25px;
    margin-bottom: 0px;
  }

  .contents {
    width: 100%;
  }

  td {
    border-bottom: solid 2px #1F2937;
    margin-left: 0px;
    font-size: 18px;
  }

  .contents-text {
    margin: 0px;
    padding: 20px;
    width: 50%;
    text-align: center;
    font-weight: bold;
  }

  input {
    font-size: 18px;
    padding: 10px 0px 10px 10px;
    width: 100%;
  }

  .button {
    text-align: center;
    margin-top: 30px;
  }

  button {
    border-radius: 5px;
    margin-top: 10px;
    font-weight: bold;
    font-size: 20px;
    color: #1F2937;
    border: 2px solid #1F2937;
    background-color: white;
    padding: 5px 20px;
    cursor: pointer;
    transition: 0.4s;
    white-space: nowrap;
  }

  button:hover {
    background-color: #1F2937;
    color: white;
  }

  .back-button {
    margin-top: 10px;
  }

  a {
    color: #1F2937;
    margin-top: 20px;
    text-decoration: none;
    font-weight: bold;
  }
</style>

@extends('layouts.layouts')
@section('logout')
<div class=header-logout>
  <form action="/logout" method="post">
    @csrf
    <button class=button-logout>ログアウト</button>
  </form>
</div>
@endsection
@section('card')
<div class=date>
  <h1 class=date-title>ユーザー情報変更</h1>
  <div>
    <form action="/user/edit" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$id}}">
      <table class=contents>
        <tr>
          <td class=contents-text>名前 </td>
          <td> <input type="text" name="name" value="{{$name}}"></td>
        </tr>
        <tr>
          <td class=contents-text>電話番号 </td>
          <td> <input type="text" name="tel" value="{{$tel}}"></td>
        </tr>
        <tr>
          <td class=contents-text>メールアドレス</td>
          <td> <input type="text" name="email" value="{{$email}}"></td>
        </tr>
      </table>
  </div>
  <div class=button>
    <button>変更</button>
    <div class="back-button">
      <a href="/user">
        戻る
      </a>
    </div>
  </div>
  </form>
</div>
@endsection

</html>