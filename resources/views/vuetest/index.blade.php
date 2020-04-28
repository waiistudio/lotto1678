@extends('layouts.master')

@section('title')
Test Vue.js
@endsection

@section('content')
<div id="app">
    <div class="row">
        <div class="col-md-12">
            <div class="card-box" style="display: inline-block">

              

                <form class="form-horizontal" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="lottoname" class="col-sm-3 col-form-label">ประเภทหวย</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lottoname" id="lottoname" placeholder="หวย..."
                                v-model="newItem.lottoname">

                            <input type="hidden" name="id" value=" {{ Auth::user()->id }} " v-model="newItem.id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lottoDate" class="col-sm-3 col-form-label">งวดวันที</label>
                        <div class="col-sm-9">
                            <input type="date" name="lottoDate" class="form-control" id="lottoDate"
                                v-model="newItem.lottoDate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dd" class="col-sm-3 col-form-label">เวลาปิดรับ</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" name="DateExpire" class="form-control" id="dd"
                                v-model="newItem.DateExpire" placeholder="xx/xx/xxxx">
                        </div>
                    </div>

                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-sm-9">
                            <button @click.prevent="createItem"
                                class="btn btn-info waves-effect waves-light">บันทึก</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-box">
                <h3>ตารางหวย</h3>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>ประเภทหวย</th>
                                <th>งวดวันที่</th>
                                <th>เวลาปิดรับ</th>
                                <th> นับถอยหลัง </th>
                                <th> สถานะ </th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in items">
                                <th scope="row">@{{ item.lottoname }}</th>
                                <td>@{{ item.lottoDate }} </td>
                                <td>@{{ item.DateExpireT }} </td>
                                <td>
                                    
                                </td>
                                <td><span class="badge badge-success">เปิดรับ</span></td>
                                <td>
                                    <button class="btn btn-icon waves-effect waves-light btn-warning"> <i class="far fa-edit"></i> </button>
                                    <button @click.prevent="deleteItem(item)" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fas fa-trash"></i> </button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection

        @section('sc')
        <script src=" {{ asset('js/app.js') }} "></script>
        @endsection