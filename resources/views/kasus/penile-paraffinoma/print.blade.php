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
            <th colspan="16">Pre Operation</th>
            <th colspan="10">Intra Operation</th>
            <th colspan="4">Post Operation</th>
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
            <th rowspan="3">Diagnosis Grade</th>
            <th rowspan="3">Case (New/Redo)</th>
            <th rowspan="3">Etiology</th>
            <th rowspan="3">Surgical History</th>
            <th colspan="5">Comorbid</th>
            <th colspan="6">Laboratory Result</th>

            <th rowspan="3">Operator</th>
            <th colspan="6">Surgical Techniques</th>
            <th colspan="3">Clinical Picture</th>


            <th rowspan="3">Haematoma</th>
            <th rowspan="3">Oedema Scrotum</th>
            <th rowspan="3">Wound Dehicense</th>
            <th rowspan="3">Clinical Picture</th>
        </tr>
        <tr>
            <th rowspan="2">DM</th>
            <th rowspan="2">Hypertension</th>
            <th rowspan="2">CKD</th>
            <th rowspan="2">Heart</th>
            <th rowspan="2">Stroke</th>
            <th rowspan="2">HB</th>
            <th rowspan="2">HT</th>
            <th rowspan="2">L</th>
            <th rowspan="2">TR</th>
            <th rowspan="2">UR</th>
            <th rowspan="2">CR</th>
            <th rowspan="2">Primary Closure</th>
            <th colspan="2">Graft</th>
            <th rowspan="2">One Stage</th>
            <th rowspan="2">Two Stages</th>
            <th rowspan="2">Second Stage</th>
            <th rowspan="2">Pre Ops</th>
            <th rowspan="2">Intra Ops</th>
            <th rowspan="2">Post Ops</th>
        </tr>
        <tr>
            <th>STSG</th>
            <th>FTSG</th>
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
            <td>{{$item->diagnosis_grade}}</td>
            <td>{{$item->is_kasus_baru == 1 ? 'New' : 'Redo'}}</td>
            <td>{{$item->operative_pre->etiology}}</td>
            <td>{{$item->riwayat_operasi}}</td>

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

            <td>{{$item->penunjang_lab_pre->lab_hb ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_ht ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_l ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_tr ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_ur ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cr ?? ''}}</td>

            <td>{{$item->operative_intra->operator ?? ''}}</td>
            <td>{{$item->operative_intra->surgical_technique_primary_closure == 1 ? "Yes" : "No"}}</td>
            <td>{{$item->operative_intra->surgical_technique_graft_stsg == 1 ? "Yes" : "No"}}</td>
            <td>{{$item->operative_intra->surgical_technique_graft_ftsg == 1 ? "Yes" : "No"}}</td>
            <td>{{$item->operative_intra->surgical_technique_one_stage == 1 ? "Yes" : "No"}}</td>
            <td>{{$item->operative_intra->surgical_technique_two_stage == 1 ? "Yes" : "No"}}</td>
            <td>{{$item->operative_intra->surgical_technique_second_stage == 1 ? "Yes" : "No"}}</td>
            @php 
                $files_names = [];
                $files_names[] = 'clinical-picture-pre-ops'; 
                $files_names[] = 'clinical-picture-intra-ops'; 
                $files_names[] = 'clinical-picture-post-ops'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach

            <td>{{$item->operative_post->haematoma == 1 ? "Yes" : "No"}}</td>
            <td>{{$item->operative_post->oedema_scrotum == 1 ? "Yes" : "No"}}</td>
            <td>{{$item->operative_post->wound_dehicense == 1 ? "Yes" : "No"}}</td>


            @php 
                $files_names = [];
                $files_names[] = 'post-ops-clinical-picture'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>