@extends('layouts.master')

@section('title')
    Lotto1678
@endsection

@section('content')
<div class="container">
    @include('members._sum')
    @include('huays.huay_open')
    @include('huays.huay_table')
</div>
@endsection

@section('sc')
<script src=" {{ asset('js/app.js') }} "></script>
@endsection
