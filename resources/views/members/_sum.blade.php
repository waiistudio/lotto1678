<div class="row">
    @if (Auth::user()->status == 1)
    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-primary" data-plugin="counterup">
                    {{ $user_sum->where('status','2')->count('status') }} </h2>
                <h5>สมาชิกระดับ : Senoir</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-pink" data-plugin="counterup">
                    {{ $user_sum->where('status','3')->count('status') }} </h2>
                <h5>สมาชิกระดับ : Master</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-warning" data-plugin="counterup">
                    {{ $user_sum->where('status','4')->count('status') }} </h2>
                <h5>สมาชิกระดับ : Agent</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="font-weight-normal text-info" data-plugin="counterup">
                    {{ $user_sum->where('status','5')->count('status') }} </h2>
                <h5>สมาชิกระดับ : Member</h5>
            </div>
        </div>
    </div>
    @else
    <div class="col-xl-12">
        <div class="card-box">
            <h5>จำนวนสมาชิก</h5>
        </div>
    </div>
    @endif
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

            <h4 class="header-title mt-0 mb-3">ผลหวยประจำงวดที่ :</h4>

            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Start Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Assign</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Adminto Admin v1</td>
                            <td>01/01/2017</td>
                            <td>26/04/2017</td>
                            <td><span class="badge badge-danger">Released</span></td>
                            <td>Coderthemes</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- end col -->
</div>