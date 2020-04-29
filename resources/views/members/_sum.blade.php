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
   
</div>