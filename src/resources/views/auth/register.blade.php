@extends('layouts.authapp')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('header')
<a href="/login" class="toLogin">Login</a>
@endsection

@section('content')
<div class="contact-form__container">
    <div class="title">
        <h2>Register</h2>
    </div>
    <form class="register-form" action="/register" method="post">
        @csrf
        <div class="register-form__item">
            <div class="form-item">
                <label class="column-name">お名前
                </label>
                <input type="text" name="name" placeholder="例）山田 太郎" value="{{ old('name') }}">
            </div>
            <div class="name--error_container">
                <div class="error-message">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="register-form__container">
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

        <div class="register-form__container">
            <div class="form-item">
                <label class="column-name">パスワード
                </label>
                <input type="password" placeholder="例）123jhhfkj" name="password" value="{{ old('password')}}">
                <div class="error-message">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <input type="password" name="password_confirmation">

        <div class="form__button">
            <button class="" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection