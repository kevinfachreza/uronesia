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
            <th colspan="8">Pre Operative</th>
            <th colspan="16">Intra Operative</th>
            <th colspan="7">Post Operative</th>
        </tr>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Name</th>
            <th rowspan="2">Age (Years Old)</th>
            <th rowspan="2">Gender</th>
            <th rowspan="2">Height</th>
            <th rowspan="2">Weight</th>
            <th rowspan="2">BMI</th>
            <th rowspan="2">Medical Record</th>
            <th rowspan="2">Phone Number</th>

            <th rowspan="2">Operation Date</th>
            <th rowspan="2">Length of Stay (Day)</th>
            <th rowspan="2">Diagnosis</th>
            <th rowspan="2">Case (New/Redo)</th>
            <th rowspan="2">Comorbid</th>
            <th rowspan="2">Surgical History</th>
            <th rowspan="2">Radiology</th>
            <th rowspan="2">Laboratory</th>


            <th rowspan="2">Operator</th>
            <th colspan="2">Port</th>
            <th colspan="4">Operation Time (minutes)</th>
            <th rowspan="2">Site</th>
            <th rowspan="2">DJ Stent</th>
            <th rowspan="2">Bleeding  (cc)</th>
            <th rowspan="2">Transfusion (kolf)</th>
            <th rowspan="2">Intraoperative Finding</th>
            <th colspan="2">Complication</th>
            <th colspan="2">Failed Procedure</th>

            <th rowspan="2">Drain Production (cc)</th>
            <th rowspan="2">Laboratory</th>
            <th rowspan="2">BNO</th>
            <th rowspan="2">Catheter  Production (cc)</th>
            <th rowspan="2">Diet</th>
            <th rowspan="2">VAS</th>
            <th rowspan="2">Analgetics</th>

        </tr>
        <tr>
            <th>Size</th>
            <th>Number</th>
            <th>Porting</th>
            <th>Operation</th>
            <th>Total Time </th>
            <th>Warm Iskemic Time</th>
            <th>Yes, describe</th>
            <th>No</th>
            <th>Yes, Cause? Open Conversion?</th>
            <th>No</th>
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
                @php $val = $item->operative_pre->comorbid_dm ?? 0 @endphp
                @if($val == 1) DM, @endif
                @php $val = $item->operative_pre->comorbid_hypertension ?? 0 @endphp
                @if($val == 1) Hypertension, @endif
                @php $val = $item->operative_pre->comorbid_cardiac ?? 0 @endphp
                @if($val == 1) Cardiac, @endif
                @php $val = $item->operative_pre->comorbid_stroke ?? 0 @endphp
                @if($val == 1) Stroke, @endif
                @php $val = $item->operative_pre->comorbid_depression ?? 0 @endphp
                @if($val == 1) Depression, @endif
                @php $val = $item->operative_pre->comorbid_renal ?? 0 @endphp
                @if($val == 1) Renal, @endif
                @php $val = $item->operative_pre->comorbid_tb ?? 0 @endphp
                @if($val == 1) TB, @endif
                {{$item->operative_pre->comorbid_others}}

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

            <td>
            @foreach($files_names as $index => $title)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            @endforeach
            </td>



            <td>
                HB : {{$item->penunjang_lab_pre->lab_hb ?? ''}}<br>
                HT : {{$item->penunjang_lab_pre->lab_ht ?? ''}}<br>
                L : {{$item->penunjang_lab_pre->lab_l ?? ''}}<br>
                TR : {{$item->penunjang_lab_pre->lab_tr ?? ''}}<br>
                UR : {{$item->penunjang_lab_pre->lab_ur ?? ''}}<br>
                CR : {{$item->penunjang_lab_pre->lab_cr ?? ''}}
            </td>

            <td>{{$item->operative_intra->operator ?? ''}}</td>
            <td>{{$item->operative_intra->port_size ?? ''}}</td>
            <td>{{$item->operative_intra->port_number ?? ''}}</td>
            <td>{{$item->operative_intra->time_operation_porting ?? ''}}</td>
            <td>{{$item->operative_intra->time ?? ''}}</td>
            <td>{{$item->operative_intra->time_operation_total ?? ''}}</td>
            <td>{{$item->operative_intra->time_operation_ischaemic_time_warm_1 ?? ''}}</td>
            <td>{{unslugify($item->operative_intra->operation_site) ?? ''}}</td>
            <td>{{$item->operative_intra->dj_stent = 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->operative_intra->blood_loss ?? ''}}</td>
            <td>{{$item->operative_intra->blood_transfusion ?? ''}}</td>
            <td>{{$item->operative_intra->finding ?? ''}}</td>

            @php $val = $item->operative_intra->complication ?? '' @endphp
            <td>@if($val == 1) {{$item->operative_intra->complication_desc ?? ''}} @endif
            <td>@if($val == 0) No @endif</td>

            @php $val = $item->operative_intra->failed_procedure ?? '' @endphp
            <td>@if($val == 1) {{$item->operative_intra->failed_procedure_cause ?? ''}} -- Open Conversion : {{$item->operative_intra->failed_procedure_open_conversion ?? ''}} @endif
            <td>@if($val == 0) No @endif</td>


        
            <td>{{$item->operative_post->drain ?? ''}}</td>


            <td>
                HB : {{$item->penunjang_lab_pre->lab_hb ?? ''}}<br>
                HT : {{$item->penunjang_lab_pre->lab_ht ?? ''}}<br>
                L : {{$item->penunjang_lab_pre->lab_l ?? ''}}<br>
                TR : {{$item->penunjang_lab_pre->lab_tr ?? ''}}<br>
                UR : {{$item->penunjang_lab_pre->lab_ur ?? ''}}<br>
                CR : {{$item->penunjang_lab_pre->lab_cr ?? ''}}
            </td>

            @php 
                $files_names = [];
                $files_names[] = 'post-operative-bno'; 
            @endphp 

            <td>
            @foreach($files_names as $index => $title)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            @endforeach
            </td>

            
            <td>{{$item->operative_post->urethral_cath ?? ''}}</td>
            <td>{{$item->operative_post->diet ?? ''}}</td>
            <td>{{$item->operative_post->vas ?? ''}}</td>
            <td>{{$item->operative_post->analgetics ?? ''}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>