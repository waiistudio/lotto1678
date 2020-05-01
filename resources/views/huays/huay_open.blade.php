<div id="app">
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
                    @if (Auth::user()->status == 1)
                    <th>จัดการ</th>
                    @endif
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
                    @if (Auth::user()->status == 1)
                    <td>
                        <button data-toggle="modal" data-target="#exampleModal" @click="showModal=true; setVal(item.id, item.lottoname, item.lottoDate, item.DateExpireT)"   class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="modal" data-target="#exampleModal" > <i class="far fa-edit"></i> </button>
                        <button @click.prevent="deleteItem(item)" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fas fa-trash"></i> </button>
                    </td>
                    @endif
                </tr>


            </tbody>
        </table>
    </div>
</div>
</div>