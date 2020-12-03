
<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATIVE</h1>

        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">OPERATION DATE</td>
                <td style="width: 20px">:</td>
                <td>{{$kasus->tanggal_operasi}}</td>
            </tr>
            <tr>
                <td>LENGTH OF STAY (DAYS)</td>
                <td>:</td>
                <td>{{$kasus->lama_perawatan_hari}} days</td>
            </tr>
            <tr>
                <td>DIAGNOSIS</td>
                <td>:</td>
                <td>{{$kasus->diagnosis}}</td>
            </tr>
            <tr>
                <td>COMORBID</td>
                <td>:</td>
                <td>{{$kasus->komorbid}}</td>
            </tr>
            <tr>
                <td>CASE</td>
                <td>:</td>
                <td>{{$kasus->is_kasus_baru == 1 ? 'New' : 'Redo'}}</td>
            </tr>
            <tr>
                <td>SURGICAL HISTORY</td>
                <td>:</td>
                <td>{{$kasus->riwayat_operasi}}</td>
            </tr>
        </table>
    </div>
</div>