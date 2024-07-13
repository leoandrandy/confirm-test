@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__backtext">Thank you</div>
    <div class="thanks__heading">
        <h2>お問い合わせありがとうございました</h2>
        <a href="{{ route('/') }}">HOME</a>        
    </div>
</div>
@endsection