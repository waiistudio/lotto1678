@extends('layouts.master')

@section('title')
{{ $header }}
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2> {{ $question->title }} </h2>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.index') }} " class="btn btn-success"><i
                                    class="fa fa-arrow-left"> กลับไปหน้ารวมคำถาม</i></a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <p> {{ $question->body }} </p>
                    <div class="float-right">
                        <span class="text-muted"> ถามเมื่อ : {{ $question->created_date }} </span>
                        <div class="media mt-2">
                            <a class="pr-2" href=" {{ $question->user->url }} ">
                                <img src=" {{ $question->user->avatar }} " width="20px">
                            </a>
                            <div class="media-body">
                                <a href=" {{ $question->user->url }} "> {{ $question->user->name }} </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> {{ $question->answers_count }} คำตอบ </h2>
                    </div>
                    <hr>
                    @foreach ($question->answers as $answer)
                        <div class="media">
                            <div class="media-body">
                                <p> {{ $answer->body }} </p>
                                <div class="float-right">
                                    <span class="text-muted"> ตอบเมื่อ : {{ $answer->created_date }} </span>
                                    <div class="media mt-2">
                                        <a class="pr-2" href=" {{ $answer->user->url }} ">
                                            <img src=" {{ $answer->user->avatar }} " width="20px">
                                        </a>
                                        <div class="media-body">
                                            <a href=" {{ $answer->user->url }} "> {{ $answer->user->name }} </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection