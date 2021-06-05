<h4 class="display-4">POST OPERATIVE</h4>
<div class="row">
    <div class="col-12">
        <h5>Physical Examination</h5>
        <h6 style="font-weight: 600" class="text-primary">Micturition Post Catheterization</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Urinary Retention</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->operative_post->micturition_urinary_retention ?? ''}}</td>
            </tr>
            <tr>
                <td>Disuria</td>
                <td>:</td>
                <td>{{$kasus->operative_post->micturition_disuria ?? ''}}</td>
            </tr>
            <tr>
                <td>Incontinence</td>
                <td>:</td>
                <td>{{$kasus->operative_post->micturition_incontinence ?? ''}}</td>
            </tr>
            <tr>
                <td>Treatment</td>
                <td>:</td>
                <td>{{$kasus->operative_post->micturition_treatment ?? ''}}</td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Other Disease</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Orchitis</td>
                <td style="width: 5px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->orchitis ?? '')}}</td>
            </tr>
            <tr>
                <td>Septic</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->septic ?? '')}}</td>
            </tr>
            <tr>
                <td>Uremia</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->uremia ?? '')}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6 style="font-weight: 600" class="text-primary">Death</h6>
        <table class="table table-no-border">
            <tr>
                <td>Death</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->death ?? '')}}</td>
                </td>
            </tr>
            <tr>
                <td>Death Cause</td>
                <td>:</td>
                <td>{{$kasus->operative_post->death_cause ?? ''}} 
                </td>
            </tr>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">PSA</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_psa ?? ''}}</td>
            </tr>
            <tr>
                <td>Clotting Time</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_clotting_time ?? ''}}</td>
            </tr>
            <tr>
                <td>Bleeding Time</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_bleeding_time ?? ''}}</td>
            </tr>
            <tr>
                <td>HB</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ht ?? ''}}</td>
            </tr>
            <tr>
                <td>LEU</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>TR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_tr ?? ''}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}</td>
            </tr>
            <tr>
                <td>NA</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_na ?? ''}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_k ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Pathology Result</h6>
        <span>{{$kasus->penunjang_lab_post->pathology_results ?? '-'}}</span>
    </div>
</div>

<div class="row my-2">
    <div class="col-12">
        <h5>Uroflowmetry</h5>
        @include('kasus.components-form.uroflowmetry-non-number-view',['bulan_ke'=>['post'],'default' => $uriflowmetry])
    </div>
</div>