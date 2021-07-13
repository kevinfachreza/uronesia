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
            <th colspan="18">Intra Operation</th> 
            <th colspan="15">Post Operation</th>
        </tr>
        <tr>
            <th rowspan="3">No</th>
            <th rowspan="3">Name</th>
            <th rowspan="3">Age (Years Old)</th>
            <th rowspan="3">Gender</th>
            <th rowspan="3">Height</th>
            <th rowspan="3">Weight</th>
            <th rowspan="3">BMI</th>
            <th rowspan="3">Medical Record</th>
            <th rowspan="3">Phone Number</th>

            <th rowspan="3">Operation Date</th>
            <th rowspan="3">Length of Stay (Day)</th>
            <th rowspan="3">Diagnosis</th>
            <th rowspan="3">Case</th>
            <th rowspan="1" colspan="5">Comorbid</th>
            <th rowspan="3">Surgical History</th>
            <th colspan="5">Radiology Result</th>
            <th rowspan="1" colspan="8">Laboratory Result</th>

            <th rowspan="3">Operator</th>
            <th colspan="16">Consultation /Joint Operation</th>
            <th rowspan="3">Clinical Picture</th>
            <th rowspan="3">APG</th>
            <th rowspan="3">BNO Post Op</th>
            <th rowspan="3">Nefrostomy Production</th>
            <th rowspan="3">Urethral Catheter Production</th>
            <th rowspan="3">Pathology Results</th>
            <th rowspan="1" colspan="8">Laboratory Result</th>
            <th rowspan="1" colspan="2">Plan</th>
        </tr>
        <tr>
            <th rowspan="2">DM</th>
            <th rowspan="2">Hypertension</th>
            <th rowspan="2">CKD</th>
            <th rowspan="2">Heart</th>
            <th rowspan="2">Stroke</th>
            <th rowspan="2">USG</th>
            <th rowspan="2">BNO</th>
            <th rowspan="2">IVP</th>
            <th rowspan="2">CT</th>
            <th rowspan="2">MRI</th>
            <th rowspan="2">HB</th>
            <th rowspan="2">HT</th>
            <th rowspan="2">L</th>
            <th rowspan="2">TR</th>
            <th rowspan="2">UR</th>
            <th rowspan="2">CR</th>
            <th rowspan="2">Na</th>
            <th rowspan="2">K</th>

            <th rowspan="2">Urethro Sistoscopy Diagnostic</th>
            <th rowspan="2">Bladder Mucosa Biopsy</th>
            <th rowspan="2">RPG</th>
            <th colspan="2">DJ Stent</th>
            <th rowspan="2">Ureter Kateter</th>
            <th colspan="2">Nefrostomy</th>
            <th colspan="4">Trauma</th>
            <th rowspan="2">Identification</th>
            <th rowspan="2">Release</th>
            <th colspan="2">Obsgyn</th>

            <th rowspan="2">HB</th>
            <th rowspan="2">HT</th>
            <th rowspan="2">L</th>
            <th rowspan="2">TR</th>
            <th rowspan="2">UR</th>
            <th rowspan="2">CR</th>
            <th rowspan="2">Na</th>
            <th rowspan="2">K</th>

            <th rowspan="2">Action</th>
            <th rowspan="2">Duration</th>
        </tr>
        <tr>
            <th>Position</th>
            <th>Duration</th>
            <th>Position</th>
            <th>Duration</th>
            <th>Ureter</th>
            <th>Bladder</th>
            <th>Urethra</th>
            <th>Action</th>
            <th>Operator</th>
            <th>Action</th>
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
            <td>{{$item->is_kasus_baru == 1 ? 'New' : 'Redo'}}</td>
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

            <td>
                @php $value = $item->operative_intra->urethro_sistocopy_diagnosis ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->bladder_mucosa_biopsy ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>{{unslugify($item->operative_intra->rpg_pos ?? '')}}</td>
            <td>{{unslugify($item->operative_intra->dj_stent_pos ?? '')}}</td>
            <td>{{unslugify($item->operative_intra->dj_stent_duration ?? '')}}</td>
            <td>{{unslugify($item->operative_intra->ureter_cath ?? '')}}</td>
            <td>{{unslugify($item->operative_intra->nefrostomy_type ?? '')}}</td>
            <td>{{unslugify($item->operative_intra->nefrostomy_pos ?? '')}}</td>
            <td>
                @php $value = $item->operative_intra->trauma_ureter ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->trauma_bladder ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>
                @php $value = $item->operative_intra->trauma_urethra ?? '0' @endphp
                @if($value == 1) Yes @else No @endif
            </td>
            <td>{{unslugify($item->operative_intra->trauma_action ?? '')}}</td>
            <td>{{unslugify($item->operative_intra->identification ?? '')}}</td>
            <td>{{unslugify($item->operative_intra->release ?? '')}}</td>
            <td>{{$item->operative_intra->obsgyn_operator ?? ''}}</td>
            <td>{{$item->operative_intra->obsgyn_action ?? ''}}</td>

             @php 
                $files_names = [];
                $files_names[] = 'intra-clinical'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
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

            <td>{{$item->operative_post->apg ?? ''}}</td>
            <td>{{unslugify($item->operative_post->nefrostomy_production ?? '')}}</td>
            <td>{{$item->operative_post->cath_production ?? ''}}</td>

            <td>{{$item->penunjang_lab_post->lab_hb ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_ht ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_l ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_tr ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_ur ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_cr ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_na ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_k ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->pathology_results ?? ''}}</td>


            <td>{{unslugify($item->operative_post->plan_type) ?? ''}}</td>
            <td>{{$item->operative_post->plan_duration ?? ''}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>