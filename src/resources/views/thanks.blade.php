@extends('layouts.authapp')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('header')
<a href="/register" class="toRegister">Register</a>
@endsection

@section('content')
<h1>Login</h1>


@endsection