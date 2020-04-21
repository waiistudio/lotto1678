@extends('layouts.master')

@section('title')
{{ $header }}
@endsection


@section('content')
<div class="col-xl-12">
    <div class="card-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
            </div>
        </div>

        <h4 class="header-title mt-0 mb-3">Basic Form</h4>

        <form action=" {{ URL::to('saveMem') }} " method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
            @csrf
            <div class="form-group">
                <label for="userName">ชื่อ-นามสกุล</label>
                <input type="text" name="name" parsley-trigger="change" required placeholder="Enter user name"
                    class="form-control" id="userName">
            </div>
            <div class="form-group">
                <label for="emailAddress">Email address*</label>
                <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email"
                    class="form-control" id="emailAddress">
            </div>
            <div class="form-group">
                <label for="pass1">Password*</label>
                <input id="pass" name="pass" type="password" minlength="8" placeholder="Password" required class="form-control">
            </div>

            <div class="form-group">
                <label for="passWord2">สถานะสมาชิก</label>
                <select name="status" class="form-control">
                    @switch(Auth::user()->status)
                        @case(1)
                            <option value="2">Senior</option>
                            @break
                        @case(2)
                            <option value="3">Master</option>
                            @break
                        @case(3)
                            <option value="4">Agent</option>
                            @break
                        @case(4)
                            <option value="5">Member</option>
                            @break
                        @default
                            
                    @endswitch
                </select>
            </div>
         
            <div class="form-group text-right mb-0">
                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    Submit
                </button>
                <button type="reset" class="btn btn-secondary waves-effect waves-light">
                    Cancel
                </button>
            </div>

        </form>
    </div>
</div><!-- end col -->
@endsection