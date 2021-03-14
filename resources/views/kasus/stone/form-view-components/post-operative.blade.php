
<div class="row">
    <div class="col-12">
        <h4 class="display-4">POST OPERATIVE</h4>
    </div>
</div>


<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'BNO Post Op';

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
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Others Data</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">VAS</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->operative_post->vas ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Nefrostomy Production</td>
                <td>:</td>
                <td>{{$kasus->operative_post->nefrostomy_production ?? ''}}  cc/color
                </td>
            </tr>
            <tr>
                <td>Analgetics IV</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->analgetics_iv ?? '')}}</td>
                </td>
            </tr>
            @php $value = $kasus->operative_post->analgetics_iv ?? 0 @endphp
            @if($value == 1)
            <tr>
                <td>Drug Name</td>
                <td>:</td>
                <td>{{$kasus->operative_post->analgetics_iv_drug ?? ''}}</td>
                </td>
            </tr>
            @endif
            <tr>
                <td>Analgetics Oral</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->analgetics_oral ?? '')}}</td>
                </td>
            </tr>
            @php $value = $kasus->operative_post->analgetics_oral ?? 0 @endphp
            @if($value == 1)
            <tr>
                <td>Drug Name</td>
                <td>:</td>
                <td>{{$kasus->operative_post->analgetics_oral_drug ?? ''}}</td>
                </td>
            </tr>
            @endif
            <tr>
                <td>Catheter Production</td>
                <td>:</td>
                <td>{{$kasus->operative_post->cath_production ?? ''}}  cc/color
                </td>
            </tr>
            <tr>
                <td>Transfusion</td>
                <td>:</td>
                <td>{{$kasus->operative_post->transfusion ?? ''}}  kolf
                </td>
            </tr>
            <tr>
                <td>Wound Dehicense</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->wound_dehicense ?? '')}}</td>
                </td>
            </tr>
        </table>
    </div>
</div>