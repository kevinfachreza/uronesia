

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'Radiology Result';

                $files_names[] = 'pre-radiology-result'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>

        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px"><strong>Laboratory Result</strong></td>
                <td style="width: 20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>HB</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ht}}</td>
            </tr>
            <tr>
                <td>L</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_l}}</td>
            </tr>
            <tr>
                <td>TR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_tr}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr}}</td>
            </tr>
        </table>
        <h6 style="font-weight: 600" class="text-primary">Urine Culture</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td>BACTERIA</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_bacteria}}</td>
            </tr>
            <tr>
                <td>SENSITIVE</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive}}</td>
            </tr>
            <tr>
                <td>RESISTANCE</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance}}</td>
            </tr>
        </table>
    </div>
</div>
