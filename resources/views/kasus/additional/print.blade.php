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
            <th colspan="8">Pre Operation</th>
            <th colspan="6">Intra Operation</th>
            <th colspan="3">Post Operation</th>
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
            <th rowspan="2">Radiology Result</th>
            <th rowspan="2">Laboratory Result</th>

            <th rowspan="2">Operator</th>
            <th rowspan="2">Surgical Techniques</th>
            <th colspan="3">Clinical Picture</th>


            <th rowspan="2">Patology Result</th>
            <th rowspan="2">Complication</th>
            <th colspan="2">Death</th>
        </tr>
        <tr>
            <th>Pre Operative</th>
            <th>Intra Operative</th>
            <th>Post Operative</th>
            <th>Yes, Cause</th>
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
            <td>{{$item->komorbid}}</td>
            <td>{{$item->riwayat_operasi}}</td>
             @php 
                $files_names = [];
                $files_names[] = 'pre-radiology-result'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach


            <td>
                HB : {{$item->penunjang_lab_pre->lab_hb ?? ''}}<br>
                HT : {{$item->penunjang_lab_pre->lab_ht ?? ''}}<br>
                L : {{$item->penunjang_lab_pre->lab_l ?? ''}}<br>
                TR : {{$item->penunjang_lab_pre->lab_tr ?? ''}}<br>
                UR : {{$item->penunjang_lab_pre->lab_ur ?? ''}}<br>
                CR : {{$item->penunjang_lab_pre->lab_cr ?? ''}}<br>
                URINE CULTURE - BACTERIA : {{$item->penunjang_lab_pre->lab_urine_cult_bacteria ?? ''}}<br>
                URINE CULTURE - SENSITIVE : {{$item->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}<br>
                URINE CULTURE - RESISTANCE : {{$item->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}<br>
            </td>
            <td>{{$item->operative_intra->operator ?? ''}}</td>
            <td>{{$item->operative_intra->surgical_technique ?? ''}}</td>
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

            <td>{{$item->penunjang_lab_post->pathology_results ?? ''}}</td>

            @php $value = $item->operative_post->complication ?? 0 @endphp
            <td>
                @if($value == 1)
                {{$item->operative_post->complication_cause ?? ''}}
                @endif
            </td>


            @php $value = $item->operative_post->complication ?? 0 @endphp
            <td>
                @if($value == 1)
                {{$item->operative_post->death_cause ?? ''}}
                @endif
            </td>
            <td>
                @if($value == 0)
                No
                @endif
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>