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
            <th colspan="43">Pre Operative</th>
            <th colspan="29">Intra Operative</th>
            <th colspan="17">Post Operative</th>
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

            <th colspan="8">Comorbid</th>
            <th rowspan="4">Cardiac Functional (LVEF)</th>
            <th colspan="8">Laboratory</th>
            <th colspan="3">Culture</th>
            <th colspan="2">Total Vessels Donor Ren Dextra</th>
            <th colspan="2">Total Vessels Donor Ren Sinistra</th>
            <th rowspan="4">Radiology (CT/MRI)</th>
            <th rowspan="4">Donor Renogram</th>
            <th rowspan="4">CKD Etiology</th>
            <th colspan="3">HLA</th>
            <th rowspan="4">Crossmatch</th>
            <th colspan="2">HCV</th>
            <th colspan="2">CMV</th>
            <th colspan="2">HIV</th>
            <th colspan="2">HbsAg</th>
            <th colspan="2">Toxoplasma</th>
            <th colspan="2">IGRA</th>

            <th colspan="2">Operator</th>
            <th colspan="23">Surgical Technique</th>
            <th rowspan="4">Size DJ stent</th>
            <th rowspan="4">Blood Loss (cc)</th>
            <th rowspan="4">Blood Transfusion (Kolf)</th>
            <th rowspan="4">Clinical Picture</th>

            <th rowspan="4">Drain (cc)</th>
            <th rowspan="4">Urethral Catheter (cc)</th>
            <th rowspan="4">BNO Post Operative</th>
            <th colspan="8">Laboratory</th>
            <th rowspan="4">Resipien Renogram</th>
            <th colspan="3">Complication</th>
            <th colspan="2">Death</th>

        </tr>
        <tr>
            <th rowspan="3">DM</th>
            <th rowspan="3">Hypertension</th>
            <th rowspan="3">Cardiac</th>
            <th rowspan="3">Stroke</th>
            <th rowspan="3">Depression</th>
            <th rowspan="3">Renal</th>
            <th rowspan="3">TB</th>
            <th rowspan="3">Others</th>

            <th rowspan="3">HB</th>
            <th rowspan="3">Leukocyte</th>
            <th rowspan="3">Platelets</th>
            <th rowspan="3">Ureum</th>
            <th rowspan="3">Creatinine</th>
            <th rowspan="3">Na</th>
            <th rowspan="3">K</th>
            <th rowspan="3">Cl</th>

            <th rowspan="3">Blood</th>
            <th rowspan="3">Urine</th>
            <th rowspan="3">Drain</th>

            <th rowspan="3">Artery</th>
            <th rowspan="3">Vein</th>
            <th rowspan="3">Artery</th>
            <th rowspan="3">Vein</th>

            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>
            <th rowspan="3">Result</th>
            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>
            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>
            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>
            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>
            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>
            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>

            <th rowspan="3">Donor</th>
            <th rowspan="3">Recipient</th>

            <th colspan="7">Donor</th>
            <th colspan="7">Resipien</th>
            <th colspan="3">Ureteral Implantation</th>
            <th colspan="4">Time Operation</th>
            <th colspan="2">Solution</th>

            <th rowspan="3">HB</th>
            <th rowspan="3">Leukocyte</th>
            <th rowspan="3">Platelets</th>
            <th rowspan="3">Ureum</th>
            <th rowspan="3">Creatinine</th>
            <th rowspan="3">Na</th>
            <th rowspan="3">K</th>
            <th rowspan="3">Cl</th>

            <th rowspan="3">No</th>
            <th colspan="2">Yes</th>

            <th rowspan="3">No</th>
            <th rowspan="3">Yes, Cause</th>
        </tr>
        <tr>
            <th rowspan="2">Kidney</th>
            <th colspan="2">Open</th>
            <th colspan="2">Laparoscopic</th>
            <th colspan="2">Robotic</th>

            <th rowspan="2">Kidney</th>
            <th rowspan="2">Technique</th>
            <th rowspan="2">Iliaca Externa</th>
            <th rowspan="2">Iliaca Interna</th>
            <th colspan="3">Anastomosis</th>
            <th rowspan="2">Extravesical</th>
            <th rowspan="2">Intravesical</th>
            <th rowspan="2">Others</th>

            <th colspan="3">Ischaemic Time</th>
            <th rowspan="2">Total Time</th>
            <th rowspan="2">Immersed</th>
            <th rowspan="2">Flushed</th>

            <th rowspan="2">Cause</th>
            <th rowspan="2">Action</th>
        </tr>
        <tr>
            <th>Transperitoneal</th>
            <th>Extraperitoneal</th>
            <th>Transperitoneal</th>
            <th>Extraperitoneal</th>
            <th>Transperitoneal</th>
            <th>Extraperitoneal</th>

            <th>End To End</th>
            <th>End To Side</th>
            <th>Side To Side</th>

            <th>Warm 1</th>
            <th>Cold</th>
            <th>Warm 2</th>
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


            
            @php $check = $item->operative_pre->comorbid_dm ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            @php $check = $item->operative_pre->comorbid_hypertension ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            @php $check = $item->operative_pre->comorbid_cardiac ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            @php $check = $item->operative_pre->comorbid_stroke ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            @php $check = $item->operative_pre->comorbid_depression ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            @php $check = $item->operative_pre->comorbid_renal ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            @php $check = $item->operative_pre->comorbid_tb ?? '' @endphp
            <td>{{$check == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->operative_pre->comorbid_others ?? ''}}</td>
            <td>{{$item->operative_pre->cardiac_functional ?? ''}}</td>

            <td>{{$item->penunjang_lab_pre->lab_hb ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_leucocyte ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_trombocyte ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_ur ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cr ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_na ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_k ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cl ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cult_blood ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cult_urine ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lab_cult_drain ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->vessels_donor_ren_dex_artery ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->vessels_donor_ren_dex_vein ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->vessels_donor_ren_sin_artery ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->vessels_donor_ren_sin_vein ?? ''}}</td>

            @php 
                $files_names = [];
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
            @endphp 

            <td>
            @foreach($files_names as $index => $title)
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            @endforeach
            </td>

            <td>{{$item->operative_pre->donor_renogram ?? ''}}</td>
            <td>{{$item->operative_pre->ckd_etiology ?? ''}}</td>
            <td>{{$item->operative_pre->hla_donor ?? ''}}</td>
            <td>{{$item->operative_pre->hla_recipient ?? ''}}</td>
            <td>{{$item->operative_pre->hla_result ?? ''}}</td>
            <td>{{$item->operative_pre->hla_crossmatch ?? ''}}</td>
            <td>{{$item->operative_pre->hcv_donor ?? ''}}</td>
            <td>{{$item->operative_pre->hcv_recipient ?? ''}}</td>
            <td>{{$item->operative_pre->cmv_donor ?? ''}}</td>
            <td>{{$item->operative_pre->cmv_recipient ?? ''}}</td>
            <td>{{$item->operative_pre->hiv_donor ?? ''}}</td>
            <td>{{$item->operative_pre->hiv_recipient ?? ''}}</td>
            <td>{{$item->operative_pre->hbsag_donor ?? ''}}</td>
            <td>{{$item->operative_pre->hbsag_recipient ?? ''}}</td>
            <td>{{$item->operative_pre->toxoplasma_donor ?? ''}}</td>
            <td>{{$item->operative_pre->toxoplasma_recipient ?? ''}}</td>
            <td>{{$item->operative_pre->igra_donor ?? ''}}</td>
            <td>{{$item->operative_pre->igra_recipient ?? ''}}</td>


            <td>{{$item->operative_intra->operator_donor ?? ''}}</td>
            <td>{{$item->operative_intra->operator_recipient ?? ''}}</td>
            <td>{{$item->operative_intra->donor_kidney ?? ''}}</td>
            <td>{{$item->operative_intra->donor_open_transperitoneal ?? ''}}</td>
            <td>{{$item->operative_intra->donor_open_extraperitoneal ?? ''}}</td>
            <td>{{$item->operative_intra->donor_laparoscopic_transperitoneal ?? ''}}</td>
            <td>{{$item->operative_intra->donor_laparoscopic_extraperitoneal ?? ''}}</td>
            <td>{{$item->operative_intra->donor_robotic_transperitoneal ?? ''}}</td>
            <td>{{$item->operative_intra->donor_robotic_extraperitoneal ?? ''}}</td>
            <td>{{$item->operative_intra->donor_kidney ?? ''}}</td>
            <td>{{$item->operative_intra->recipient_technique ?? ''}}</td>
            <td>{{$item->operative_intra->recipient_iliaca_externa ?? ''}}</td>
            <td>{{$item->operative_intra->recipient_iliaca_interna ?? ''}}</td>
            <td>{{$item->operative_intra->recipient_anastomosis_end_to_end ?? ''}}</td>
            <td>{{$item->operative_intra->recipient_anastomosis_end_to_side ?? ''}}</td>
            <td>{{$item->operative_intra->recipient_anastomosis_side_to_side ?? ''}}</td>
            <td>{{$item->operative_intra->urethral_implantation_extravesical ?? ''}}</td>
            <td>{{$item->operative_intra->urethral_implantation_intravesical ?? ''}}</td>
            <td>{{$item->operative_intra->urethral_implantation_others ?? ''}}</td>
            <td>{{$item->operative_intra->time_operation_ischaemic_time_warm_1 ?? ''}}</td>
            <td>{{$item->operative_intra->time_operation_ischaemic_time_cold ?? ''}}</td>
            <td>{{$item->operative_intra->time_operation_ischaemic_time_warm_2 ?? ''}}</td>
            <td>{{$item->operative_intra->time_operation_total ?? ''}}</td>
            <td>{{$item->operative_intra->solution_immersed ?? ''}}</td>
            <td>{{$item->operative_intra->solution_flushed ?? ''}}</td>
            <td>{{$item->operative_intra->dj_stent_size ?? ''}}</td>
            <td>{{$item->operative_intra->blood_loss ?? ''}}</td>
            <td>{{$item->operative_intra->blood_transfusion ?? ''}}</td>


            @php 
                $files_names = [];
                $files_names[] = 'intra-operative-clinical';
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach


            <td>{{$item->operative_post->drain ?? ''}}</td>
            <td>{{$item->operative_post->urethral_cath ?? ''}}</td>
            @php 
                $files_names = [];
                $files_names[] = 'post-operative-bno'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach


            <td>{{$item->penunjang_lab_post->lab_hb ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_leucocyte ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_trombocyte ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_ur ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_cr ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_na ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_k ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->lab_cl ?? ''}}</td>

            <td>{{$item->operative_post->recipient_renogram ?? ''}}</td>

            @php $val = $item->operative_post->complication ?? '' @endphp
            <td>@if($val == 0) No @endif</td>
            <td>@if($val == 1) {{$item->operative_post->complication_action ?? ''}} @endif</td>
            <td>@if($val == 1) {{$item->operative_post->complication_cause ?? ''}} @endif</td>


            @php $val = $item->operative_post->death ?? '' @endphp
            <td>@if($val == 0) No @endif</td>
            <td>@if($val == 1) {{$item->operative_post->death_cause ?? ''}} @endif
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>