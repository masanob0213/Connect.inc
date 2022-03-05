<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
  .data {
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

  .data-title {
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

  .button {
    margin-top: 30px;
    text-align: center;
  }

  button {
    border-radius: 5px;
    font-weight: bold;
    font-size: 20px;
    color: #1F2937;
    border: 2px solid #1F2937;
    background-color: white;
    padding: 10px 40px;
    cursor: pointer;
    transition: 0.4s;
    white-space: nowrap;
  }

  button:hover {
    background-color: #1F2937;
    color: white;
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
<div class=data>
  <h1 class=data-title>会員情報</h1>
  <div>
    <table class=contents>
      <tr>
        <td class=contents-text>名前 </td>
        <td> {{$name}}</td>
      </tr>
      <tr>
        <td class=contents-text>電話番号 </td>
        <td> {{$tel}}</td>
      </tr>
      <tr>
        <td class=contents-text>メールアドレス</td>
        <td> {{$email}}</td>
      </tr>
    </table>
  </div>
  <div class=button>
    <form action="/user/edit" method="get">
      <button>会員情報変更</button>
    </form>
  </div>
</div>
@endsection

</html>