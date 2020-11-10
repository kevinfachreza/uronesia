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
            <th colspan="28">Pre Operation</th>
            <th colspan="11">Intra Operation</th>
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
            <th rowspan="3">Diagnosis</th>
            <th rowspan="3">Case (New/Redo)</th>
            <th rowspan="3">Comorbid</th>
            <th rowspan="3">Surgical History</th>
            <th rowspan="3">Radiology Result</th>
            <th rowspan="3">Radiology Pictures</th>
            <th rowspan="3">Laboratory Result</th>

            <th colspan="8">History Taking</th>
            <th colspan="11">Physical Examination</th>

            <th rowspan="3">Indication</th>
            <th rowspan="3">Classification</th>
            <th rowspan="3">Surgery Type</th>
            <th rowspan="3">Operator</th>
            <th rowspan="3">Operating Time (Minutes)</th>
            <th colspan="2">Intraoperative Consultation</th>
            <th rowspan="3">Intraoperative Finding</th>
            <th rowspan="3">Bleeding (cc)</th>
            <th rowspan="3">Blood Transfusion</th>
            <th rowspan="3">Surgical Technique</th>


            <th colspan="2">Death</th>
            <th rowspan="3">Intensive Care Unit (Day)</th>
            <th rowspan="3">Re Operation</th>
        </tr>
        <tr>
            <th rowspan="2">Date</th>
            <th rowspan="2">Trauma Type</th>
            <th rowspan="2">Etiology</th>
            <th colspan="5">Main Complaint</th>

            <th rowspan="2">Glasgow Coma Scale</th>
            <th rowspan="2">Shock Hystory</th>
            <th rowspan="2">Resusitation Respond</th>
            <th rowspan="2">Peritonitis</th>
            <th colspan="7">Urinary Tract and External Genitalia</th>

            <th rowspan="2">Action</th>
            <th rowspan="2">Operator</th>

            <th rowspan="2">Yes, Cause?</th>
            <th rowspan="2">No</th>
        </tr>
        <tr>
            <th>Pain Location</th>
            <th>Haematuria</th>
            <th>Meatal Bleeding</th>
            <th>Urinary Retention</th>
            <th>Shock</th>

            <th>Kidney</th>
            <th>Ureter</th>
            <th>Bladder</th>
            <th>Penile</th>
            <th>Urethra</th>
            <th>Scrotum</th>
            <th>Perianal</th>
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
            <td>{{$item->riwaYest_operasi}}</td>
            <td>{{$item->penunjang_radiologi}}</td>
            <td>
                @foreach($item->penunjang_radiology as $penunjang)
                <a class="" href="{{url($penunjang->path)}}" target="_blank">#File{{$loop->iteration}}</a><br>
                @endforeach
            </td>


            <td>
                HB : {{$item->penunjang_lab_hb}}<br>
                HT : {{$item->penunjang_lab_ht}}<br>
                L : {{$item->penunjang_lab_l}}<br>
                TR : {{$item->penunjang_lab_tr}}<br>
                UR : {{$item->penunjang_lab_ur}}<br>
                CR : {{$item->penunjang_lab_cr}}<br>
                URINE CULTURE - BACTERIA : {{$item->penunjang_lab_bacteria}}<br>
                URINE CULTURE - SENSITIVE : {{$item->penunjang_lab_sensitive}}<br>
                URINE CULTURE - RESISTANCE : {{$item->penunjang_lab_resistance}}<br>
            </td>
            <td>{{$item->history_taking_date}}</td>
            <td>{{unslugify($item->trauma_type)}} @if($item->trauma_type == 'other') - {{$item->trauma_type_others}} @endif</td>
            <td>{{unslugify($item->etiology)}}</td>
            <td>{{unslugify($item->main_complaint_pain_location)}} @if($item->main_complaint_pain_location == 'other')  - {{$item->main_complaint_pain_location_others}} @endif
            </td>
            <td>{{$item->main_complaint_haematuria == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->main_complaint_meatal_bleeding == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->main_complaint_urinary_retention == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->main_complaint_shock == 1 ? 'Yes' : 'No'}}</td>

            <td>{{$item->physical_examination_gcs}}</td>
            <td>{{$item->physical_examination_shock_history}}</td>
            <td>{{$item->physical_examination_resusitation_respond}}</td>
            <td>{{$item->physical_examination_peritonitis}}</td>
            <td>{{$item->physical_examination_kidney}}</td>
            <td>{{$item->physical_examination_ureter}}</td>
            <td>{{$item->physical_examination_bladder}}</td>
            <td>{{$item->physical_examination_penile}}</td>
            <td>{{$item->physical_examination_urethra}}</td>
            <td>{{$item->physical_examination_scrotum}}</td>
            <td>{{$item->physical_examination_perianal}}</td>

            <td>{{$item->ops_indication}}</td>
            <td>{{unslugify($item->ops_classification)}}</td>
            <td>{{$item->ops_surgery_type}}</td>
            <td>{{$item->ops_operator}}</td>
            <td>{{$item->physical_examination_urethra}}</td>
            <td>{{$item->intraops_consult_action}}</td>
            <td>{{$item->intraops_consult_operator}}</td>
            <td>{{$item->intraops_finding}}</td>
            <td>{{$item->intraops_bleeding}}</td>
            <td>{{$item->intraops_blood_transfusion}}</td>
            <td>{{unslugify($item->intraops_surgical_technique)}}</td>

            <td>{{$item->postops_death == 1 ? 'Yes' : ''}}
                @if($item->postops_death) - {{$item->postops_death_cause}} @endif
            </td>
            <td>{{$item->postops_death != 1 ? '' : 'No'}}</td>
            <td>{{$item->postops_icu_days}}</td>
            <td>
                @if($item->postops_reoperation)
                {{$item->postops_reoperation_cause}} - {{$item->postops_reoperation_days}}
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>