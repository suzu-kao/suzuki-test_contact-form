@extends('layouts.authapp')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('header')
<a href="/auth/register" class="toLogin">register</a>
@endsection

@section('content')
<div class="login-form__container">
    <div class="title">
        <h2>Login</h2>
    </div>
    <form class="login-form" action="/login" method="post">
        @csrf
        <div class="login-form__item">
            <div class="form-item">
                <label class="column-name">メールアドレス
                </label>
                <input type="text" placeholder="例）jack@yahoo.me.jp" name="email" value="{{ old('email')}}">
            </div>
            <div class="error-message">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="login-form__item">
            <div class="form-item">
                <label class="column-name">パスワード
                </label>
                <input type="text" placeholder="例）123jhhfkj" name="password" value="{{ old('password')}}">
                <div class="error-message">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection