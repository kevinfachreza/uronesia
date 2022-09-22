<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <style type="text/css">
      th{
        border:solid 1px #000;
      }
  </style>
</head>

<body>
<table id="example" class="" style="width: 100%;">
    <thead>
        <tr>
            <th colspan="9">Patient Data</th>
            <th colspan="23">Pre Operation</th>
            <th colspan="47">Intra Operation</th> 
            <th colspan="15">Post Operation</th>
        </tr>
        <tr>
            <th rowspan="5">No</th>
            <th rowspan="5">Name</th>
            <th rowspan="5">Age (Years Old)</th>
            <th rowspan="5">Gender</th>
            <th rowspan="5">Height</th>
            <th rowspan="5">Weight</th>
            <th rowspan="5">BMI</th>
            <th rowspan="5">Medical Record</th>
            <th rowspan="5">Phone Number</th>

            <th rowspan="5">Operation Date</th>
            <th rowspan="5">Length of Stay (Day)</th>
            <th rowspan="5">Diagnosis</th>
            <th rowspan="5">Case</th>
            <th rowspan="1" colspan="5">Comorbid</th>
            <th rowspan="5">Surgical History</th>
            <th colspan="5">Radiology Result</th>
            <th rowspan="1" colspan="8">Laboratory Result</th>

            <th rowspan="5">Operator</th>
            <th rowspan="5">Position</th>
            <th colspan="21">Surgical Techniques</th>
            <th colspan="4">Fluoroscopy</th>
            <th colspan="7">Stone Fragmentation</th>
            <th colspan="4">Complication</th>
            <th rowspan="5">Bleeding (cc)</th>
            <th rowspan="5">Transfusion (Kolf)</th>
            <th colspan="3">Failed Procedure</th>
            <th colspan="4">Rest Stone</th>
            <th rowspan="5">BNO Post Op</th>
            <th colspan="8">Laboratory</th>
            <th rowspan="5">VAS</th>
            <th rowspan="5">Nefrostomy Production (cc/color) </th>
            <th rowspan="5">Analgetics</th>
            <th rowspan="5">Catheter Production (cc/color)</th>
            <th rowspan="5">Transfusion (kolf)</th>
            <th rowspan="5">Wound Dehicense</th>
        </tr>
        <tr>
            <th rowspan="4">DM</th>
            <th rowspan="4">Hypertension</th>
            <th rowspan="4">CKD</th>
            <th rowspan="4">Heart</th>
            <th rowspan="4">Stroke</th>
            <th rowspan="4">USG</th>
            <th rowspan="4">BNO</th>
            <th rowspan="4">IVP</th>
            <th rowspan="4">CT</th>
            <th rowspan="4">MRI</th>
            <th rowspan="4">HB</th>
            <th rowspan="4">HT</th>
            <th rowspan="4">L</th>
            <th rowspan="4">TR</th>
            <th rowspan="4">UR</th>
            <th rowspan="4">CR</th>
            <th rowspan="4">Na</th>
            <th rowspan="4">K</th>

            <th rowspan="4">Open (Description)</th>
            <th colspan="15">PCNL</th>
            <th rowspan="4">RIRS</th>
            <th rowspan="4">URS</th>
            <th rowspan="4">Vesicolithotripsi</th>
            <th rowspan="4">Liithotripsi Urethral stone</th>
            <th rowspan="4">Time (Minutes)</th>
            <th colspan="3">Yes</th>
            <th rowspan="4">No</th>
            <th rowspan="4">Pneumatic</th>
            <th rowspan="4">Ultrasound</th>
            <th rowspan="4">Laser</th>
            <th rowspan="4">Lowsley</th>
            <th rowspan="4">Stone Punch</th>
            <th rowspan="4">Hendrikson</th>
            <th rowspan="4">No</th>
            <th rowspan="4">No</th>
            <th colspan="3">Yes</th>
            <th rowspan="4">No</th>
            <th colspan="2">Yes</th>
            <th rowspan="4">No</th>
            <th colspan="3">Yes</th>
            <th rowspan="4">HB</th>
            <th rowspan="4">HT</th>
            <th rowspan="4">L</th>
            <th rowspan="4">TR</th>
            <th rowspan="4">UR</th>
            <th rowspan="4">CR</th>
            <th rowspan="4">Na</th>
            <th rowspan="4">K</th>
        </tr>
        <tr>
            <th rowspan="3">Cystoscopy</th>
            <th colspan="7">Operation Time (Minutes)</th>
            <th colspan="5">Puncture</th>
            <th colspan="2">Dilatation</th>

            <th rowspan="3">Pre op Imaging</th>
            <th rowspan="3">Post op Imaging</th>
            <th rowspan="3">Time (Minutes)</th>

            <th rowspan="3">Perforation</th>
            <th rowspan="3">Intestinal Perforation</th>
            <th rowspan="3">Hydrothorax</th>

            <th rowspan="3">Cause</th>
            <th rowspan="3">Open Conversion</th>

            <th rowspan="3">Size</th>
            <th rowspan="3">Plan</th>
            <th rowspan="3">Clinical Picture</th>
        </tr>
        <tr>
            <th rowspan="2">Position</th>
            <th colspan="5">PCNL</th>
            <th rowspan="2">Total Time (Minutes)</th>

            <th rowspan="2">Below Costa 12</th>
            <th rowspan="2">Above Costa 12</th>
            <th rowspan="2">Above Costa 11</th>
            <th rowspan="2">Type</th>
            <th rowspan="2">Multi puncture</th>
            <th rowspan="2">Type</th>
            <th rowspan="2">Number Amplatz (Fr)</th>
        </tr>
        <tr>
            <th>Puncture</th>
            <th>Dilatation</th>
            <th>Lithotripsi</th>
            <th>DJ Stent</th>
            <th>Nefrostomy</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kasus as $item)
        <tr role="row">
            <td>{{$loop->iteration}}</td>
            <td>{{$item->pasien->nama}}</td>
            <td>{{$item->pasien->age}}</td>
            <td>{{$item->pasien->jenis_kelamin == 'lk' ? 'Man' : 'Woman'}}</td>
            <td>{{$item->tb}}</td>
            <td>{{$item->bb}}</td>
            @include('kasus.components-print.data-tb-bb')
            <td>{{$item->pasien->no_rm}}</td>
            <td>{{$item->pasien->nomor_telpon}}</td>
            
            <td>{{$item->tanggal_operasi}}</td>
            <td>{{$item->lama_perawatan_hari}}</td>
            <td>{{$item->diagnosis}}</td>
            <td>{{unslugify($item->operative_pre->case_type ?? '') ?? ''}}</td>
            <td>
                @php $value = $item->operative_pre->comorbid_dm ?? 0 @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_pre->comorbid_hypertension ?? 0 @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_pre->comorbid_heart_stroke ?? 0 @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_pre->comorbid_stroke ?? 0 @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_pre->comorbid_ckd ?? 0 @endphp
                @if($value == 1) Yes @else No @endif
            </td>

            <td>{{$item->riwayat_operasi}}</td>
            
            @php 
                $files_names = [];
                $files_names[] = 'radiology-pre-usg'; 
                $files_names[] = 'radiology-pre-bno'; 
                $files_names[] = 'radiology-pre-ivp'; 
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach


            <td>{{$item->penunjang_lab_pre->lab_hb ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_ht ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_l ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_tr ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_ur ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cr ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_na ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_k ?? ''}}</td>

            <td>{{$item->operative_intra->operator ?? ''}}</td>
            <td>{{unslugify($item->operative_intra->surgical_technique_position ?? '') ?? ''}}</td>
                
            <td>
                @php $value = $item->operative_intra->surgical_technique_is_open ?? '0' @endphp
                @if($value == 1) 
                {{$item->operative_intra->surgical_technique_open_desc}}
                @else
                No
                @endif
            </td>
            <td>{{unslugify($item->operative_intra->pcnl_pos ?? '') ?? ''}}</td>
            <td>{{$item->operative_intra->pcnl_time_cystocopy ?? ''}}</td>
            <td>{{$item->operative_intra->pcnl_time_puncture ?? ''}}</td>
            <td>{{$item->operative_intra->pcnl_time_dilatation ?? ''}}</td>
            <td>{{$item->operative_intra->pcnl_time_lithotripsi ?? ''}}</td>
            <td>{{$item->operative_intra->pcnl_time_dj_stent ?? ''}}</td>
            <td>{{$item->operative_intra->pcnl_time_nefrostomy ?? ''}}</td>
            <td>{{$item->operative_intra->pcnl_time_total_time ?? ''}}</td>


            <td>
                @php $value = $item->operative_intra->pcnl_puncture_below_costa_12 ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->pcnl_puncture_above_costa_12 ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->pcnl_puncture_above_costa_11 ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                {{unslugify($item->operative_intra->pcnl_puncture_type ?? '')}}
            </td>
            <td>
                @php $value = $item->operative_intra->pcnl_puncture_multi ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                {{unslugify($item->operative_intra->pcnl_dilatation_type ?? '')}}
            </td>
            <td>
                {{$item->operative_intra->pcnl_dilatation_number ?? ''}} 
            </td>
            <td>
                @php $value = $item->operative_intra->surgical_technique_rirs ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->surgical_technique_urs ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->surgical_vesico ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->pcnl_puncture_multi ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                {{$item->operative_intra->time ?? ''}} 
            </td>
            @php $value = $item->operative_intra->fluoroscopy_is ?? '0' @endphp

             @php 
                $files_names = [];
                $files_names[] = 'fluoroscopy-intra'; 
                $files_names[] = 'fluoroscopy-post'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @if($value == 1)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
                @endif
            </td>
            @endforeach

            <td>
                @if($value == 1)
                {{$item->operative_intra->fluoroscopy_time ?? ''}}
                @endif
            </td>

            <td>
                @if($value != 1)
                No
                @endif
            </td>
            <td>
                @php $value = $item->operative_intra->stone_frag_pneumatic ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->stone_frag_ultrasound ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->stone_frag_laser ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->stone_frag_lowsley ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->stone_frag_stone_punch ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->stone_frag_hendrikson ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->stone_frag_no ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->complication ?? '0' @endphp
                @if($value == 0) No @endif
            </td>
            <td>
                @if($value == 1) {{$item->operative_intra->complication_perf_desc ?? ''}} @endif
            </td>
            <td>
                @if($value == 1) {{$item->operative_intra->complication_intestinal_perf_desc ?? ''}} @endif
            </td>
            <td>
                @if($value == 1) {{$item->operative_intra->complication_hydrothorax ?? ''}} @endif
            </td>
            <td>
               {{$item->operative_intra->blood_loss ?? ''}}
            </td>
            <td>
               {{$item->operative_intra->blood_transfusion ?? ''}}
            </td>

            <td>
                @php $value = $item->operative_intra->failed_procedure ?? '0' @endphp
                @if($value == 0) No @endif
            </td>
            <td>
                @if($value == 1) {{$item->operative_intra->failed_procedure_cause ?? ''}} @endif
            </td>
            <td>
                @if($value == 1) {{$item->operative_intra->failed_procedure_open_conversion ?? ''}} @endif
            </td>

            <td>
                @php $value = $item->operative_intra->rest_stone_is ?? '0' @endphp
                @if($value == 0) No @endif
            </td>
            <td>
                @if($value == 1) {{$item->operative_intra->rest_stone_size ?? ''}} @endif
            </td>
            <td>
                @if($value == 1) {{$item->operative_intra->rest_stone_plan ?? ''}} @endif
            </td>

            @php 
                $files_names = [];
                $files_names[] = 'rest-stone-clinical-picture'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @if($value == 1)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
                @endif
            </td>
            @endforeach

            @php 
                $files_names = [];
                $files_names[] = 'post-ops-bno'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @if($value == 1)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
                @endif
            </td>
            @endforeach


            <td>{{$item->penunjang_lab_post->lab_hb ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_ht ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_l ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_tr ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_ur ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_cr ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_na ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_k ?? ''}}</td>


            <td>{{$item->operative_post->vas ?? ''}}</td>
            <td>{{$item->operative_post->nefrostomy_production ?? ''}}</td>
            <td>{{unslugify($item->operative_post->analgetics ?? '') ?? ''}}</td>
            <td>{{$item->operative_post->cath_production ?? ''}}</td>
            <td>{{$item->operative_post->transfusion ?? ''}}</td>
            <td>
                @php $value = $item->operative_post->wound_dehicense ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>