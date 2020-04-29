@extends('layouts.master')

@section('title')
    {{ $header }}
@endsection

@section('content')
<div id="app">
    <div class="row">
        <div class="col-md-12">
            <div class="card-box" style="display: inline-block">

              

                <form v-if="showadd" class="form-horizontal" method="POST">
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
                            <input type="datetime-local" name="DateExpire"  class="form-control" id="dd"
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


        <modal v-if="showModal" @close="showModal=false">
            <h3 slot="header">Edit Item</h3>
            <div slot="body">
                
                <input type="hidden" disabled class="form-control" id="e_id" name="id"
                        required  :value="this.e_id">
                ประเภทหวย: <input type="text" class="form-control" id="e_lottoname" name="name"
                        required  :value="this.e_lottoname">
                งวดวันที: <input type="date" class="form-control" id="e_lottoDate" name="age"
                required  :value="this.e_lottoDate">
                วันปิดรับ: <input type="text" class="form-control" id="e_DateExpireT" name="profession"
                required  :value="this.e_DateExpireT">
                
              
            </div>
            <br>
            <div slot="footer">
                <button class="btn btn-default" @click="showModal = false">
                Cancel
              </button>
              
              <button class="btn btn-info" @click="editItem()">
                Update
              </button>
            </div>
        </modal>

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
                                <th>  </th>
                                <th> สถานะ </th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in items">
                                <th scope="row">@{{ item.lottoname }}</th>
                                <td>@{{ item.lottoDate | formatDate }} </td>
                                <td>@{{ item.DateExpireT | formatDateTime }} </td>
                                <td>
                                    <Countdown :deadline='item.DateExpireT'></Countdown>
                                </td>
                                <td><span class="badge badge-success">เปิดรับ</span></td>
                                <td>
                                    <button data-toggle="modal" data-target="#exampleModal" @click="showModal=true; setVal(item.id, item.lottoname, item.lottoDate, item.DateExpireT)"   class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="modal" data-target="#exampleModal" > <i class="far fa-edit"></i> </button>
                                    <button @click.prevent="deleteItem(item)" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fas fa-trash"></i> </button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <modal v-if="showModal" @close="showModal=false">
            <h3 slot="header">Edit Item</h3>
            <div slot="body">
                
                <input type="hidden" disabled class="form-control" id="e_id" name="id"
                        required  :value="this.e_id">
                Name: <input type="text" class="form-control" id="e_lottoname" name="name"
                        required  :value="this.e_lottoname">
                Age: <input type="date" class="form-control" id="e_lottoDate" name="age"
                required  :value="this.e_lottoDate">
                Profession: <input type="text" class="form-control" id="e_DateExpireT" name="profession"
                required  :value="this.e_DateExpireT">
                
              
            </div>
            <div slot="footer">
                <button class="btn btn-default" @click="showModal = false">
                Cancel
              </button>
              
              <button class="btn btn-info" @click="editItem()">
                Update
              </button>
            </div>
        </modal>

      

       
  
   
   
        @endsection

        @section('sc')
        <script src=" {{ asset('js/app.js') }} "></script>
        @endsection