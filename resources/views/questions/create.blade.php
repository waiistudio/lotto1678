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
                        <h5>เพิ่มคำถาม</h5>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.index') }} " class="btn btn-success"><i
                                    class="fa fa-arrow-left"> กลับไปหน้ารวมคำถาม</i></a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <form action=" {{ route('questions.store') }} " method="POST">
                      @include('questions._form',['buttonText'=>"บันทึกคำถาม"])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection