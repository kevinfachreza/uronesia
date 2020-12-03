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
            <th colspan="36">Pre Operative</th>
            <th colspan="10">Intra Operative</th>
            <th colspan="13">Post Operative</th>
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

            <th colspan="11">Anamnesis</th>
            <th colspan="21">Physical Examination</th>
            <th colspan="3">Laboratory Results</th>
            <th rowspan="3">Radiology Results</th>


            <th rowspan="3">Operator</th>
            <th rowspan="3">Operation Date</th>
            <th rowspan="3">Surgical Technique</th>
            <th rowspan="3">Time (Minutes)</th>
            <th rowspan="3">Prostate Weight</th>
            <th rowspan="3">Blood Transfusion (Kolf)</th>
            <th rowspan="3">Difficulty</th>
            <th rowspan="3">Other surgery</th>
            <th rowspan="3">Size Catheter (Fr)</th>
            <th rowspan="3">Clinical Picture</th>

            <th rowspan="3">Pathology Result</th>
            <th colspan="4">Micturition Post Catheterization</th>
            <th rowspan="3">Other Disease</th>
            <th colspan="2">Death</th>
            <th rowspan="3">Laboratory</th>
            <th colspan="4">Uroflowmetry</th>
        </tr>
        <tr>
            <th rowspan="2">Prostatismus</th>
            <th rowspan="2">Haematuria</th>
            <th rowspan="2">UTI Symptoms</th>
            <th rowspan="2">Urinary Retention</th>
            <th rowspan="2">History Of Prostate Surgery</th>
            <th rowspan="2">History Of Vesicolithiasis Surgery</th>
            <th rowspan="2">Dauer Catheter</th>
            <th rowspan="2">Cystotomy</th>
            <th rowspan="2">Prostate Biopsy Result</th>
            <th rowspan="2">Cystoscopy</th>
            <th rowspan="2">IPSS</th>


            <th colspan="2">CVA Tenderness</th>
            <th colspan="2">Renal Mass</th>
            <th rowspan="2">Vesica Urinary Tenderness</th>
            <th rowspan="2">Vesica Urinary Mass</th>
            <th rowspan="2">Urethral Meatus </th>
            <th rowspan="2">Hypospadia</th>
            <th colspan="2">Testis Morphology</th>
            <th colspan="5">Rectal Toucher</th>
            <th colspan="2">Others Abnormality</th>
            <th colspan="4">Uroflowmetry</th>

            <th rowspan="2">Blood</th>
            <th rowspan="2">Urinalysis</th>
            <th rowspan="2">Urine Culture</th>

            <th rowspan="2">Urinary Retention</th>
            <th rowspan="2">Disuria</th>
            <th rowspan="2">Incontinence</th>
            <th rowspan="2">Treatment</th>
            <th rowspan="2">No</th>
            <th rowspan="2">Yes, Cause?</th>
            <th rowspan="2">Q-max</th>
            <th rowspan="2">Voiding Time</th>
            <th rowspan="2">Void Volume</th>
            <th rowspan="2">Residual Urine</th>
        </tr>
        <tr>
            <th>Right</th>
            <th>Left</th>
            <th>Right</th>
            <th>Left</th>
            <th>Right</th>
            <th>Left</th>
            <th>Prostate Weight</th>
            <th>Surface</th>
            <th>Consistency</th>
            <th>Nodul</th>
            <th>Tenderness</th>
            <th>Hernia</th>
            <th>Haemorrhoid</th>
            <th>Q-max</th>
            <th>Voiding Time</th>
            <th>Void Volume</th>
            <th>Residual Urine</th>
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
            <td>{{number_format($item->bb / ($item->tb*$item->tb/100/100),2) }}</td>
            <td>{{$item->pasien->no_rm}}</td>
            <td>{{$item->pasien->nomor_telpon}}</td>

            <td>{{$item->anamnesis->prostatismus ?? ''}}</td>
            <td>{{$item->anamnesis->haematuria ?? ''}}</td>
            <td>{{$item->anamnesis->uti_symptoms ?? ''}}</td>
            <td>{{$item->anamnesis->urinary_retention ?? ''}}</td>
            <td>{{$item->anamnesis->history_of_prostate_surgery ?? ''}}</td>
            <td>{{$item->anamnesis->history_of_vesicolithiasis_surgery ?? ''}}</td>
            <td>{{$item->anamnesis->dauer_cath ?? ''}}</td>
            <td>{{$item->anamnesis->cystotomy ?? ''}}</td>
            <td>{{$item->anamnesis->prostate_biopsi_result ?? ''}}</td>
            <td>{{$item->anamnesis->cystoscopy ?? ''}}</td>
            <td>{{$item->anamnesis->ipss ?? ''}}</td>

            <td>{{$item->physical_exam->cva_tenderness_right ?? ''}}</td>
            <td>{{$item->physical_exam->cva_tenderness_left ?? ''}}</td>
            <td>{{$item->physical_exam->renal_mass_right ?? ''}}</td>
            <td>{{$item->physical_exam->renal_mass_left ?? ''}}</td>
            <td>{{$item->physical_exam->vesica_urinary_tenderness?? ''}}</td>
            <td>{{$item->physical_exam->vesica_urinary_mass ?? ''}}</td>
            <td>{{$item->physical_exam->urethral_meatus ?? ''}}</td>
            <td>{{$item->physical_exam->hypospadia ?? ''}}</td>
            <td>{{$item->physical_exam->testes_morphology_right ?? ''}}</td>
            <td>{{$item->physical_exam->testes_morphology_left ?? ''}}</td>
            <td>{{$item->physical_exam->rectal_toucher_prostate_weight ?? ''}}</td>
            <td>{{$item->physical_exam->rectal_toucher_surface ?? ''}}</td>
            <td>{{$item->physical_exam->rectal_toucher_consistency ?? ''}}</td>
            <td>{{$item->physical_exam->rectal_toucher_nodul ?? ''}}</td>
            <td>{{$item->physical_exam->rectal_toucher_tenderness ?? ''}}</td>

            @php $check = $item->physical_exam->hernia ?? 0 @endphp
            <td>@if($check == 1) Yes @endif</td>

            @php $check = $item->physical_exam->haemorrhoid ?? 0 @endphp
            <td>@if($check == 1) Yes @endif</td>
            <td>{{$item->uriflowmetry_arr['pre']->max_rate ?? ''}}</td>
            <td>{{$item->uriflowmetry_arr['pre']->voiding_time ?? ''}}</td>
            <td>{{$item->uriflowmetry_arr['pre']->volume ?? ''}}</td>
            <td>{{$item->uriflowmetry_arr['pre']->residual_urine ?? ''}}</td>


            <td>
                PSA : {{$item->penunjang_lab_pre->lab_psa ?? ''}}<br>
                Clotting Time : {{$item->penunjang_lab_pre->lab_clotting_time ?? ''}}<br>
                Bleeding Time : {{$item->penunjang_lab_pre->lab_bleeding_time ?? ''}}<br>
                HB : {{$item->penunjang_lab_pre->lab_hb ?? ''}}<br>
                HT : {{$item->penunjang_lab_pre->lab_ht ?? ''}}<br>
                LEU : {{$item->penunjang_lab_pre->lab_leucocyte ?? ''}}<br>
                TR : {{$item->penunjang_lab_pre->lab_tr ?? ''}}<br>
                UR : {{$item->penunjang_lab_pre->lab_ur ?? ''}}<br>
                CR : {{$item->penunjang_lab_pre->lab_cr ?? ''}}<br>
                NA : {{$item->penunjang_lab_pre->lab_na ?? ''}}<br>
                K : {{$item->penunjang_lab_pre->lab_k ?? ''}}
            </td>
            <td>
                PH : {{$item->penunjang_lab_pre->lab_urine_ph ?? ''}}<br>
                Specific Gravity : {{$item->penunjang_lab_pre->lab_urine_specific_gravity ?? ''}}<br>
                Eritrosit : {{$item->penunjang_lab_pre->lab_urine_eritrosit ?? ''}}<br>
                Leucocyte : {{$item->penunjang_lab_pre->lab_urine_leukosit ?? ''}}
            </td>
            <td>
                Pathogen : {{$item->penunjang_lab_pre->lab_urine_cult_pathogen ?? ''}}<br>
                Sensitive : {{$item->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}<br>
                Resistance : {{$item->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}
            </td>

            @php 
                $files_names = [];
                $files_names[] = 'radiology-pre-usg-transrectal'; 
                $files_names[] = 'radiology-pre-ivp'; 
                $files_names[] = 'radiology-pre-cystography'; 
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
            @endphp 

            <td>
            @foreach($files_names as $index => $title)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            @endforeach
            </td>


            <td>{{$item->operative_intra->operator ?? ''}}</td>
            <td>{{$item->operative_intra->operation_date ?? ''}}</td>
            <td>{{$item->operative_intra->surgical_technique ?? ''}}</td>
            <td>{{$item->operative_intra->time ?? ''}}</td>
            <td>{{$item->operative_intra->prostate_weight ?? ''}}</td>
            <td>{{$item->operative_intra->blood_transfusion ?? ''}}</td>
            <td>{{$item->operative_intra->difficulty ?? ''}}</td>
            <td>{{$item->operative_intra->surgery_other ?? ''}}</td>
            <td>{{$item->operative_intra->cath_size ?? ''}}</td>


            @php 
                $files_names = [];
                $files_names[] = 'intra-clinical-picture';
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach

            <td>{{$item->penunjang_lab_post->pathology_results ?? ''}}</td>


            <td>{{$item->operative_post->micturition_urinary_retention ?? ''}}</td>
            <td>{{$item->operative_post->micturition_disuria ?? ''}}</td>
            <td>{{$item->operative_post->micturition_incontinence ?? ''}}</td>
            <td>{{$item->operative_post->micturition_treatment ?? ''}}</td>
            <td>
                @php $check = $item->operative_post->orchitis ?? 0 @endphp
                @if($check == 1) Orchitis @endif

                @php $check = $item->operative_post->septic ?? 0 @endphp
                @if($check == 1) Septic @endif

                @php $check = $item->operative_post->uremia ?? 0 @endphp
                @if($check == 1) Uremia @endif
            </td>

            @php $val = $item->operative_post->death ?? '' @endphp
            <td>@if($val == 0) No @endif</td>
            <td>@if($val == 1) {{$item->operative_post->death_cause ?? ''}} @endif

            <td>
                HB : {{$item->penunjang_lab_post->lab_hb ?? ''}}<br>
                HT : {{$item->penunjang_lab_post->lab_l ?? ''}}<br>
                Leucocyte : {{$item->penunjang_lab_post->lab_leucocyte ?? ''}}<br>
                Trombocyte : {{$item->penunjang_lab_post->lab_trombocyte ?? ''}}<br>
                UR : {{$item->penunjang_lab_post->lab_ur ?? ''}}<br>
                CR : {{$item->penunjang_lab_post->lab_cr ?? ''}}<br>
                Na : {{$item->penunjang_lab_post->lab_na ?? ''}}<br>
                K : {{$item->penunjang_lab_post->lab_k ?? ''}}<br>
            </td>

            <td>{{$item->uriflowmetry_arr['post']->max_rate ?? ''}}</td>
            <td>{{$item->uriflowmetry_arr['post']->voiding_time ?? ''}}</td>
            <td>{{$item->uriflowmetry_arr['post']->volume ?? ''}}</td>
            <td>{{$item->uriflowmetry_arr['post']->residual_urine ?? ''}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>