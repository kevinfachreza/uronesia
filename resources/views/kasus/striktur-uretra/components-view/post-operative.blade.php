
<div class="row">
    <div class="col-12 mt-2">
        <hr style="width: 100%">
        <h4 class="display-4">POST OPERATIVE</h4>
        <h5>Erection Hardness Score</h5>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Pre Operative</td>
                <td style="width: 20px">:</td>
                <td>{{$kasus->ops_skor_ereksi_pre_ops}}</td>
            </tr>
            <tr>
                <td>Post Operative</td>
                <td>:</td>
                <td>{{$kasus->ops_skor_ereksi_post_ops}}</td>
            </tr>
        </table>
    </div>

    <div class="col-12">
        <hr>
        @include('kasus.components-form.radio-button-2-opsi-view',['default'=> $kasus->ops_post_chordee,'label'=>'Chordee','name'=>'ops_post_chordee','options' => ['No','Yes']])
        <hr>
        <h5>Penile Length (cm)</h5>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Pre Operative</td>
                <td style="width: 20px">:</td>
                <td>{{$kasus->ops_panjang_penis_pre_ops}} cm</td>
            </tr>
            <tr>
                <td>Post Operative</td>
                <td>:</td>
                <td>{{$kasus->ops_panjang_penis_post_ops}} cm</td>
            </tr>
        </table>
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-2-opsi-view',['default'=> $kasus->ops_perikateter_urethrografi,'label'=>'Pericatheter Urethrography','name'=>'ops_perikateter_urethrografi','options' => ['None','Leakage']])
    </div>

    <div class="col-12">
        <h5>Pericatheter Urethrography Picture</h5>
        <div class="row">
            @foreach($kasus->penunjang_urethrography as $penunjang)
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
    <div class="col-12">
        <h5>Uroflowmetry</h5>
        @include('kasus.components-form.uriflowmetry-view',['bulan_ke'=>[1,3,6,9,12,24,60],'default' => $uriflowmetry])
    </div>
</div>