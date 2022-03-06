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


    .data-title {
        font-size: 25px;
        margin-bottom: 0px;
    }

    .contents {
        width: 100%;
    }

    table {
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
        padding: 5px 0px 5px 10px;
        width: 80%;
        display: block;
        margin: 10px 0;
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

    .login-button {
        text-decoration: none;
        text-align: center;
        margin-top: 15px;
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
@endsection
@section('card')
<div class=data>
    <h1 class=data-title>パスワード再設定</h1>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <table>
                <td class=contents-text>
                    メールアドレス
                </td>
                <td>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </td>
            </table>
        </div>
        <div class=button>
            <button>
                リンクを送信
            </button>
            <div class="login-button">
                <a href="login">
                    ログインに戻る
                </a>
            </div>
    </form>
</div>
@endsection

</html>