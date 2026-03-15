@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<h1 class="page-title">Confirm</h1>
<div class="confirm-table">
    <form action="/thanks" method="post">
        @csrf
        
    </form>
</div>
@endsection