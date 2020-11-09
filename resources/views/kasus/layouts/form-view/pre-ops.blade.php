
<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATION</h1>

        <table class="table table-no-border">
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
                <td>{{$kasus->is_kasus_baru == 1 ? 'Baru' : 'Lama'}}</td>
            </tr>
            <tr>
                <td>SURGICAL HISTORY</td>
                <td>:</td>
                <td>{{$kasus->riwayat_operasi}}</td>
            </tr>
            <tr>
                <td>RADIOLOGY RESULT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_radiologi}}</td>
            </tr>
        </table>


        <div class="col-12">
            <h5>Radiology Pictures</h5>
            <div class="row">
                @foreach($kasus->penunjang_radiology as $penunjang)
                <div class="col-lg-2 col-md-4 col-6">
                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                        <a href="{{url('')}}/{{$penunjang->path}}">
                            <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <table class="table table-no-border">
            <tr>
                <td style="width: 150px"><strong>Laboratory Result</strong></td>
                <td style="width: 20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>HB</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_hb}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_ht}}</td>
            </tr>
            <tr>
                <td>L</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_l}}</td>
            </tr>
            <tr>
                <td>TR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_tr}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_ur}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_cr}}</td>
            </tr>
            <tr>
                <td>URINE CULTURE - BACTERIA</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_bacteria}}</td>
            </tr>
            <tr>
                <td>URINE CULTURE - SENSITIVE</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_sensitive}}</td>
            </tr>
            <tr>
                <td>URINE CULTURE - RESISTANCE</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_resistance}}</td>
            </tr>
        </table>

    </div>
</div>