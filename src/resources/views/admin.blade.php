@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('header')
<a href="/logout" class="toLogout">Register</a>
@endsection

@section('content')
<h1>Admin</h1>


@endsection