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
                        <h5>คำถามทั้งหมด</h5>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.create') }} " class="btn btn-success"><i class="fa fa-plus"> เพิ่มคำถาม</i></a>
                        </div>
                    </div>
                    
                </div>

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
                                <div class="d-flex align-items-center">
                                <h3 class="mt-0"><a href=" {{ $question->url }} ">{{ $question->title }}</a></h3>
                                <div class="ml-auto">
                                    @if (Auth::user()->can('update-question', $question))
                                    <a href=" {{ route('questions.edit',$question->id) }} " class="btn btn-sm btn-outline-info">แก้ไข</a>
                                    @endif
                                    @if (Auth::user()->can('delete-question', $question))
                                    <form class="form-delete" method="POST" action=" {{ route('questions.destroy',$question->id) }} " >
                                        @method('DELETE') 
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการลบคำถามใช่หรือไม่ ?')">ลบ</button>
                                    </form>
                                    @endif
                                    
                                </div>
                                </div>
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