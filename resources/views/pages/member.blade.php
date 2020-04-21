@extends('layouts.master')

@section('title')
    {{ $header }}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="mt-0 header-title">จัดการสมาชิก</h4>
            <p class="text-muted font-14 mb-3">
                <a href=" {{ URL::to('add') }} " class="btn btn-success waves-effect waves-light"> <i style="color:white" class="fa fa-plus"></i> <span style="color: white;">
                    @switch(Auth::user()->status )
                        @case(1)
                            สร้าง Senoir
                            @break
                        @case(2)
                            สร้าง Master
                            @break
                        @case(3)
                            สร้าง Agent
                            @break
                        @case(4)
                            สร้าง Member
                            @break
                        @default
                            
                    @endswitch
                 </span> </a>
            </p>

            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                <thead>
                <tr>
                    <th>ชื่อ</th>
                    <th>สถานะ</th>
                    <th>email</th>
                    <th>เครดิต</th>
                </tr>
                </thead>


                <tbody>
                    @foreach ($user_data as $fr)
                        
                    
                <tr>
                    <td> {{ $fr->name }} </td>
                    <td> 
                        @switch($fr->status)
                            @case(1)
                                <span class="badge badge-danger"> 
                                @break
                            @case(2)
                                <span class="badge badge-warning"> 
                                @break
                            @case(3)
                                <span class="badge badge-purple"> 
                                @break
                            @case(4)
                                <span class="badge badge-primary"> 
                                @break
                            @case(5)
                                <span class="badge badge-success"> 
                                @break
                            @default
                                
                        @endswitch
                        
                        {{ $fr->levels->name }} </span></td>
                    <td> {{ $fr->email }} </td>
                    <td>unavailable</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
@endsection