@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
@endsection

@section('content')
<h1 class="page-title">Contact</h1>
<div class="input-contact">
    <form action="/confirm" method="post">
        @csrf
        
    </form>
</div>
@endsection