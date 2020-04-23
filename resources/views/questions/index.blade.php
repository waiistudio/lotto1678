@extends('layouts.master')

@section('title')
    {{ $header }}
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">คำถามทั้งหมด</div>

                <div class="card-body">
                   @foreach ($questions as $question)
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{ $question->votes }} </strong> โหวต
                                </div>
                            </div>
                            <div class="d-flex flex-column counters">
                                <div class="status {{ $question->status }} ">
                                    <strong>{{ $question->answers }} </strong> คำตอบ
                                </div>
                            </div>
                           
                            <div class="media-body">
                                <h3 class="mt-0"><a href=" {{ $question->url }} ">{{ $question->title }}</a></h3>
                                <p class="lead">
                                    ถามโดย : 
                                    <a href=" {{ $question->user->url }} "> {{ $question->user->name }} </a>

                                    <small class="text-muted"> {{ $question->created_date }} </small>
                                </p>
                                {{ Str::limit($question->body, 250) }}
                                
                                    <div class="view">
                                       จำนวนการเข้าชม <strong>{{ $question->views }}</strong> ครั้ง 
                                    </div>
                               
                            </div>                        
                        </div>
                        <hr>
                   @endforeach

                    <div class="mx-auto">
                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection