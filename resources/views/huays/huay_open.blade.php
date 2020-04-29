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
                    
                </tr>


            </tbody>
        </table>
    </div>
</div>
</div>