@extends('layouts.master')

@section('content')
    @foreach ($user_data as $k)
        @if ($k->status == Auth::user()->status )
            {{ $k->name }}
        @endif
    @endforeach
@endsection