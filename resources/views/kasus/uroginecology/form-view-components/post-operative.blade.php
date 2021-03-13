
<div class="row">
    <div class="col-12">
        <h4 class="display-4">POST OPERATIVE</h4>
    </div>
</div>


<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'BNO Post Ops';

                $files_names[] = 'post-ops-bno'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Others Data</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">APG</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->operative_post->apg ?? '' ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Nefrostomy Production</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_post->nefrostomy_production ?? '')}}
                </td>
            </tr>
            <tr>
                <td>Nefrostomy Production Dx</td>
                <td>:</td>
                <td>{{$kasus->operative_post->nefrostomy_production_dx ?? ''}}  cc / color
                </td>
            </tr>
            <tr>
                <td>Nefrostomy Production Sin</td>
                <td>:</td>
                <td>{{$kasus->operative_post->nefrostomy_production_sin ?? ''}}  cc / color
                </td>
            </tr>
            <tr>
                <td>Urethral Catheter Production</td>
                <td>:</td>
                <td>{{$kasus->operative_post->urethral_cath_production ?? ''}}  cc / color
                </td>
            </tr>
            <tr>
                <td>Catheter Production</td>
                <td>:</td>
                <td>{{$kasus->operative_post->cath_production ?? ''}}  cc / color
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px"><strong class="text-primary">Laboratory Result</strong></td>
                <td style="width: 20px"></td>
                <td></td>
            </tr>
            <tr>
                <td>HB</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_ht ?? ''}}</td>
            </tr>
            <tr>
                <td>L</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_l ?? ''}}</td>
            </tr>
            <tr>
                <td>TR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_tr ?? ''}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_cr ?? ''}}</td>
            </tr>
            <tr>
                <td>Na</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_na ?? ''}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_k ?? ''}}</td>
            </tr>
            <tr>
                <td>Pathology Result</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->pathology_results ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Plan</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Action</td>
                <td style="width: 5px">:</td>
                <td>{{unslugify($kasus->operative_post->plan_type ?? '') ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Duration</td>
                <td>:</td>
                <td>{{$kasus->operative_post->plan_duration ?? '' ?? ''}}  cc/color
                </td>
            </tr>
        </table>
    </div>
</div>