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
                            <a href=" {{ route('questions.create') }} " class="btn btn-success"><i
                                    class="fa fa-arrow-left"> กลับไปหน้ารวมคำถาม</i></a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <form action=" {{ route('questions.store') }} " method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question-title">หัวข้อคำถาม</label>
                            <input type="text" name="title" value=" {{ old('title') }} " id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' :'' }}">
                            @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                <strong> {{ $errors->first('title') }} </strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question-body">รายละเอียดคำถาม</label>
                            <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' :'' }}" rows="10" id="question-body"> {{ old('body') }} </textarea>
                            @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                <strong> {{ $errors->first('body') }} </strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">เพิ่มคำถาม</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection