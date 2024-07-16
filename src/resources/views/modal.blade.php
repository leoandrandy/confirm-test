@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection

@section('content')
<div class="modal-container"><!-- モーダルウィンドウ本体の囲み -->
    <div class="modal-body">
        <button type="button" class="modal-close">close</button><!-- 閉じるボタン -->
        <div class="modal-content"><!-- コンテンツエリア -->
            <div class="">
                <!-- 詳細データ呼び出し -->
            </div>
        </div>
    </div>
</div>
@endsection