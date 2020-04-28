@extends('layouts.master')

@section('title')
    Test Vue.js
@endsection

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <form class="form-horizontal" action=" {{ route('huays.store') }} " method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="lottoname" class="col-sm-3 col-form-label">ประเภทหวย</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="lottoname" id="lottoname" placeholder="หวย...">
        
                                <input type="hidden" name="id" value=" {{ Auth::user()->id }} ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lottoDate" class="col-sm-3 col-form-label">งวดวันที</label>
                            <div class="col-sm-9">
                                <input type="date" name="lottoDate" class="form-control" id="lottoDate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dd" class="col-sm-3 col-form-label">เวลาปิดรับ</label>
                            <div class="col-sm-9">
                                <input type="datetime-local" name="DateExpire" class="form-control" id="dd"
                                    placeholder="xx/xx/xxxx">
                            </div>
                        </div>
        
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light">บันทึก</button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
@endsection

@section('sc')
<script src=" {{ asset('js/app.js') }} "></script>
@endsection