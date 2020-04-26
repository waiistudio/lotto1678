@extends('layouts.master')

@section('title')
{{ $header }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <form class="form-horizontal" action="" method="POST" role="form">
                @csrf
                <div class="form-group row">
                    <label for="lottoname" class="col-sm-3 col-form-label">ประเภทหวย</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="lottoname" id="lottoname" placeholder="ประเภทหวย">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lottodate" class="col-sm-3 col-form-label">งวดวันที</label>
                    <div class="col-sm-9">
                        <input type="date" name="lottodate" class="form-control" id="lottodate" placeholder="งวดวันที่">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="DateExprie" class="col-sm-3 col-form-label">เวลาปิดรับ</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" name="DateExprie" class="form-control" id="DateExprie">
                    </div>
                </div>

                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light">บันทึก</button>
                    </div>
                </div>
            </form>
        </div>

        <hr>

        <div class="card-box">
            <h3>ตารางหวย</h3>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@TwBootstrap</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection