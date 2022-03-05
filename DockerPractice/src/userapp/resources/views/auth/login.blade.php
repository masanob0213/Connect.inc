<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    .data {
        /*background-color: red;*/
        margin: 20px 80px;
        padding-top: 20px;
    }

    .data-title {
        margin-top: 10px;
        margin-bottom: 0px;
        font-size: 25px;
    }

    table {
        /*background-color: blue;*/
        width: 100%;
        height: 200px;
    }

    td {
        border-bottom: solid 2px #1F2937;
    }

    .contents-text {
        width: 50%;
        text-align: center;
        font-weight: bold;
    }

    .contents-input {
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

    .register-button {
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
@endsection
@section('card')
<div class=data>
    <h1 class=data-title>ログイン</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <table>
                <tr>
                    <!-- Email Address -->
                    <td class=contents-text>
                        メールアドレス
                    </td>
                    <td>
                        <input class=contents-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </td>
                </tr>
                <tr>
                    <!-- Password -->
                    <td class=contents-text>
                        パスワード
                    </td>
                    <td>
                        <input class=contents-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </td>
                </tr>
            </table>
        </div>

        <div class=button>
            <button>
                ログイン
            </button>
            <div class="register-button">
                <a href="register">
                    会員登録はこちら
                </a>
            </div>
        </div>
    </form>
</div>
@endsection
</div>

</html>