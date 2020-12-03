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
            <th colspan="61">Pre Operative</th>
            <th colspan="14">Intra Operative</th>
            <th colspan="12">Post Operative</th>
        </tr>
        <tr>
            <th rowspan="4">No</th>
            <th rowspan="4">Name</th>
            <th rowspan="4">Age (Years Old)</th>
            <th rowspan="4">Gender</th>
            <th rowspan="4">Height</th>
            <th rowspan="4">Weight</th>
            <th rowspan="4">BMI</th>
            <th rowspan="4">Medical Record</th>
            <th rowspan="4">Phone Number</th>

            <th rowspan="4">Operation Date</th>
            <th rowspan="4">Length of Stay (Day)</th>
            <th rowspan="4">Diagnosis</th>
            <th rowspan="4">Case (New/Redo)</th>
            <th rowspan="4">Comorbid</th>
            <th rowspan="4">Surgical History</th>

            <th colspan="8">Anamnesis</th>
            <th colspan="23">Physical Examination</th>
            <th colspan="15">Laboratory Results</th>
            <th colspan="7">Radiology Results</th>
            <th rowspan="4">Pathology Results</th>


            <th rowspan="4">Operator</th>
            <th rowspan="4">Operation Date</th>
            <th rowspan="4">Time (Minutes)</th>
            <th rowspan="4">Blood Loss (cc)</th>
            <th rowspan="4">Blood Transfusion (Kolf)</th>
            <th colspan="4">Urinary Diversion</th>
            <th rowspan="4">Clinical Picture</th>
            <th colspan="4">Other Treatment</th>

            <th rowspan="4">Clinical Picture</th>
            <th rowspan="4">Wound</th>
            <th rowspan="4">Drain</th>
            <th rowspan="4">Urethral Catheter (cc)</th>
            <th rowspan="4">BNO Post Operative</th>
            <th rowspan="4">Laboratory</th>
            <th rowspan="4">Radiology</th>
            <th colspan="2">Complication</th>
            <th colspan="2">Death</th>
            <th rowspan="4">Next Plan</th>
        </tr>
        <tr>
            <th colspan="2">Main Complaint</th>
            <th colspan="3">History Of Urinary Tract Stone</th>
            <th rowspan="3">History Of Urology Surgery</th>
            <th rowspan="3">Karnofsky</th>
            <th rowspan="3">IIEF-5</th>

            <th colspan="7">Renal</th>
            <th colspan="2">Bladder</th>
            <th colspan="2">Penis</th>
            <th colspan="3">Testes</th>
            <th colspan="2">Inguinal Gland</th>
            <th colspan="2">Supraclavicula Gland</th>
            <th colspan="5">Prostate</th>

            <th colspan="4">Blood</th>
            <th colspan="4">Tumor Marker</th>
            <th colspan="7">Urine</th>

            <th rowspan="3">Thorax</th>
            <th rowspan="3">BNO/IVP</th>
            <th rowspan="3">USG</th>
            <th rowspan="3">CT</th>
            <th rowspan="3">MRI</th>
            <th rowspan="3">Bone Scan</th>
            <th rowspan="3">Urethrocystoscopy</th>


            <th rowspan="3">Nephrostomy</th>
            <th rowspan="3">DJ Stent</th>
            <th rowspan="3">Urethral Catheter</th>
            <th rowspan="3">Others</th>
            <th rowspan="3">Radiotherapy</th>
            <th rowspan="3">Chemotherapy</th>
            <th rowspan="3">Hormonal</th>
            <th rowspan="3">Others</th>

            <th rowspan="3">No</th>
            <th rowspan="3">Yes, Action</th>
            <th rowspan="3">No</th>
            <th rowspan="3">Yes, Cause?</th>
        </tr>
        <tr>
            <th rowspan="2">Description</th>
            <th rowspan="2">Since</th>
            <th rowspan="2">No</th>
            <th rowspan="2">Yes</th>
            <th rowspan="2">Location</th>

            <th rowspan="2">Mass</th>
            <th rowspan="2">Size</th>
            <th rowspan="2">Solid</th>
            <th rowspan="2">Cystic</th>
            <th rowspan="2">Mobile</th>
            <th rowspan="2">Fixed</th>
            <th rowspan="2">Pain</th>
            <th rowspan="2">Full</th>
            <th rowspan="2">Mass</th>
            <th rowspan="2">Circumcision</th>
            <th rowspan="2">Mass</th>
            <th rowspan="2">Size</th>
            <th rowspan="2">Consistency</th>
            <th rowspan="2">Hydrocele</th>
            <th rowspan="2">Size</th>
            <th rowspan="2">Fixed</th>
            <th rowspan="2">Size</th>
            <th rowspan="2">Fixed</th>
            <th rowspan="2">Weight</th>
            <th rowspan="2">Surface</th>
            <th rowspan="2">Consistency</th>
            <th rowspan="2">Pain</th>
            <th rowspan="2">Nodul</th>

            <th rowspan="2">(Hb/L/T/LED/Diff Count)</th>
            <th rowspan="2">Ur/Cr</th>
            <th rowspan="2">Glucose (N/PP)</th>
            <th rowspan="2">Alkali Phospatase</th>
            <th rowspan="2">α-Fetoprotein</th>
            <th rowspan="2">β-HCG</th>
            <th rowspan="2">LDH</th>
            <th rowspan="2">PSA</th>
            <th colspan="2">Urinalysis</th>
            <th colspan="3">Culture</th>
            <th colspan="2">Cytology</th>


        </tr>
        <tr>
            <th>Eritrocyte</th>
            <th>Leucocyte</th>
            <th>Bacteria</th>
            <th>Sensitive</th>
            <th>Resistance</th>
            <th>Class</th>
            <th>Grade</th>
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
            
            <td>{{$item->tanggal_operasi}}</td>
            <td>{{$item->lama_perawatan_hari}}</td>
            <td>{{$item->diagnosis}}</td>
            <td>{{$item->is_kasus_baru == 1 ? 'New' : 'Redo'}}</td>
            <td>{{$item->komorbid}}</td>
            <td>{{$item->riwayat_operasi}}</td>


            <td>{{$item->anamnesis->main_complaint ?? ''}}</td>
            <td>{{$item->anamnesis->main_complaint_since ?? ''}}</td>
            @php $val = $item->anamnesis->history_of_urinarytract_stone ?? '' @endphp
            <td>@if($val == 0) No @endif</td>
            <td>@if($val == 1) Yes @endif</td>
            <td>@if($val == 1) {{$item->anamnesis->history_of_urinarytract_stone_location ?? ''}} No @endif </td>
            <td>{{$item->anamnesis->history_of_urology_surgery ?? ''}}</td>
            <td>{{$item->anamnesis->karnofsky ?? ''}}</td>
            <td>{{$item->anamnesis->iief5 ?? ''}}</td>

            <td>{{$item->physical_exam->renal_mass ?? ''}}</td>
            <td>{{$item->physical_exam->renal_size ?? ''}}</td>
            <td>{{$item->physical_exam->renal_solid ?? ''}}</td>
            <td>{{$item->physical_exam->renal_cystic ?? ''}}</td>
            <td>{{$item->physical_exam->renal_mobile?? ''}}</td>
            <td>{{$item->physical_exam->renal_fixed ?? ''}}</td>
            <td>{{$item->physical_exam->renal_pain ?? ''}}</td>
            @php $check = $item->physical_exam->bladder_full ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->physical_exam->bladder_mass ?? ''}}</td>
            @php $check = $item->physical_exam->penis_circumcision ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->physical_exam->penis_mass ?? ''}}</td>
            <td>{{$item->physical_exam->testes_size ?? ''}}</td>
            <td>{{$item->physical_exam->testes_consistency ?? ''}}</td>
            <td>{{$item->physical_exam->testes_hydrocele ?? ''}}</td>
            <td>{{$item->physical_exam->inguinal_gland_size ?? ''}}</td>
            <td>{{$item->physical_exam->inguinal_gland_fixed ?? ''}}</td>
            <td>{{$item->physical_exam->superclavicula_gland_size ?? ''}}</td>
            <td>{{$item->physical_exam->superclavicula_gland_fixed ?? ''}}</td>
            <td>{{$item->physical_exam->prostate_weight ?? ''}}</td>
            <td>{{$item->physical_exam->prostate_surface ?? ''}}</td>
            <td>{{$item->physical_exam->prostate_consistency ?? ''}}</td>
            <td>{{$item->physical_exam->prostate_pain ?? ''}}</td>
            <td>{{$item->physical_exam->prostate_nodul ?? ''}}</td>


            <td>
                HB : {{$item->penunjang_lab_pre->lab_hb ?? ''}}<br>
                L : {{$item->penunjang_lab_pre->lab_l ?? ''}}<br>
                T : {{$item->penunjang_lab_pre->lab_t ?? ''}}<br>
                LED : {{$item->penunjang_lab_pre->lab_led ?? ''}}<br>
                DIFF COUNT : {{$item->penunjang_lab_pre->lab_diff_count ?? ''}}
            </td>
            <td>
                UR : {{$item->penunjang_lab_pre->lab_ur ?? ''}}<br>
                CR : {{$item->penunjang_lab_pre->lab_cr ?? ''}}
            </td>
            <td>
                N : {{$item->penunjang_lab_pre->lab_glucose_n ?? ''}}<br>
                PP : {{$item->penunjang_lab_pre->lab_glucose_pp ?? ''}}
            </td>
            <td>{{$item->penunjang_lab_pre->lab_alkali_phospatase ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_a_fetoprotein ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_b_hcg ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_ldh ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_psa ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_urine_eritrosit ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_urine_leukosit ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_urine_cult_bacteria ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cytology_class ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cytology_grade ?? ''}}</td>

            @php 
                $files_names = [];
                $files_names[] = 'radiology-pre-thorax'; 
                $files_names[] = 'radiology-pre-bnoivp'; 
                $files_names[] = 'radiology-pre-usg'; 
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
                $files_names[] = 'radiology-pre-bone'; 
                $files_names[] = 'radiology-pre-urethrocystocopy';
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach

            <td>{{$item->penunjang_lab_pre->pathology_results ?? ''}}</td>


            <td>{{$item->operative_intra->operator ?? ''}}</td>
            <td>{{$item->operative_intra->operation_date ?? ''}}</td>
            <td>{{$item->operative_intra->time ?? ''}}</td>
            <td>{{$item->operative_intra->blood_loss ?? ''}}</td>
            <td>{{$item->operative_intra->blood_transfusion ?? ''}}</td>
            <td>
                Position : {{$item->operative_intra->urinary_diversion_nephrostomy_pos ?? ''}}<br>
                Size : {{$item->operative_intra->urinary_diversion_nephrostomy_size ?? ''}}
            </td>
            <td>
                Position : {{$item->operative_intra->urinary_diversion_dj_stent_pos ?? ''}}<br>
                Size : {{$item->operative_intra->urinary_diversion_dj_stent_size ?? ''}}
            </td>
            <td>
                Position : {{$item->operative_intra->urinary_diversion_urethral_cath_pos ?? ''}}<br>
                Size : {{$item->operative_intra->urinary_diversion_urethral_cath_size ?? ''}}
            </td>
            <td>{{$item->operative_intra->urinary_diversion_other ?? ''}}</td>


            @php 
                $files_names = [];
                $files_names[] = 'intra-operative-clinical';
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach
            <td>{{$item->operative_intra->treatment_radiotherapy ?? ''}}</td>
            <td>{{$item->operative_intra->treatment_chemotherapy ?? ''}}</td>
            <td>{{$item->operative_intra->treatment_hormonal ?? ''}}</td>
            <td>{{$item->operative_intra->treatment_others ?? ''}}</td>


            @php 
                $files_names = [];
                $files_names[] = 'post-operative-clinical';
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach

            <td>{{$item->operative_post->wound ?? ''}}</td>
            <td>{{$item->operative_post->drain ?? ''}}</td>
            <td>{{$item->operative_post->urethral_cath ?? ''}}</td>
            <td>{{$item->operative_post->bno ?? ''}}</td>
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

            @php 
                $files_names = [];
                $files_names[] = 'radiology-post-thorax'; 
                $files_names[] = 'radiology-post-bnoivp'; 
                $files_names[] = 'radiology-post-usg'; 
                $files_names[] = 'radiology-post-ct'; 
                $files_names[] = 'radiology-post-mri'; 
                $files_names[] = 'radiology-post-bone'; 
                $files_names[] = 'radiology-post-urethrocystocopy';
            @endphp 

            <td>
            @foreach($files_names as $index => $title)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            @endforeach
            </td>

            @php $val = $item->operative_post->complication ?? '' @endphp
            <td>@if($val == 0) No @endif</td>
            <td>@if($val == 1) {{$item->operative_post->complication_action ?? ''}} @endif

            @php $val = $item->operative_post->death ?? '' @endphp
            <td>@if($val == 0) No @endif</td>
            <td>@if($val == 1) {{$item->operative_post->death_cause ?? ''}} @endif
            <td>{{$item->operative_post->next_plan ?? ''}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>