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
            <th colspan="65">Pre Operative</th>
            <th colspan="10">Intra Operative</th>
            <th colspan="3">Post Operative</th>
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

            <th colspan="28">History Taking</th>
            <th colspan="12">Physical Assessment</th>
            <th colspan="15">Laboratory Examination</th>
            <th colspan="3">Imaging</th>
            <th rowspan="5">Patology Results (Testis Biopsy)</th>
            <th colspan="6">Diagnosis</th>
            <th colspan="10">Treatment</th>
            <th colspan="3">Follow Up</th>
        </tr>
        <tr>
            <th rowspan="4">Main Complaint</th>
            <th colspan="3">Marital Status </th>
            <th colspan="3">Semen Discharge When Ejaculation</th>
            <th colspan="2">Erection</th>
            <th rowspan="4">Pain Post Ejaculation</th>
            <th rowspan="4">Hematospermia</th>
            <th rowspan="4">Uretritis History</th>
            <th rowspan="4">Obstructive/Iritative Symptoms</th>
            <th rowspan="4">Secondary Sex Abnormality</th>
            <th rowspan="4">Other Congenital Disease</th>
            <th rowspan="4">Scrotal Tenderness</th>
            <th rowspan="4">Inguinal Mass</th>
            <th colspan="7">History</th>
            <th rowspan="4">Family History of Infertility</th>
            <th colspan="3">Wife Status</th>


            <th colspan="12">External Genitalia</th>
            <th colspan="5">Semen Analysis 1</th>
            <th colspan="5">Semen Analysis 2</th>
            <th rowspan="4">FSH</th>
            <th rowspan="4">LH</th>
            <th rowspan="4">Testosteron</th>
            <th rowspan="4">Chromosome Analysis</th>
            <th rowspan="4">Other </th>
            <th rowspan="4">Testicle USG</th>
            <th rowspan="4">USG Transrectal</th>
            <th rowspan="4">Other</th>
            <th colspan="3">Primary Infertility</th>
            <th colspan="3">Secondary Infertility</th>


            <th colspan="2">Non Invasive</th>
            <th colspan="5">Invasive</th>
            <th rowspan="4">Other</th>
            <th rowspan="4">Operation Date</th>
            <th rowspan="4">Clinical Picture</th>

            <th rowspan="4">Complain</th>
            <th rowspan="4">Assessment</th>
            <th rowspan="4">Other</th>
        </tr>
        <tr>
            <th rowspan="3">No</th>
            <th colspan="2">Yes</th>
            <th rowspan="3">Normal</th>
            <th rowspan="3">Few</th>
            <th rowspan="3">Nothing</th>
            <th rowspan="3">Morning Erection</th>
            <th rowspan="3">Erection With Stimulation</th>

            <th rowspan="3">UDT</th>
            <th rowspan="3">Varicocele</th>
            <th rowspan="3">Trauma</th>
            <th rowspan="3">Genital Surgery</th>
            <th rowspan="3">Reccurent UTI</th>
            <th rowspan="3">Malignancy</th>
            <th rowspan="3">Other</th>

            <th rowspan="3">Past Pregnancy History</th>
            <th rowspan="3">Abortion Status</th>
            <th rowspan="3">Family Planning History</th>


            <th colspan="4">Testis</th>
            <th colspan="3">Epididymis</th>
            <th colspan="3">Vas Deferens</th>
            <th rowspan="3">Urethritis</th>
            <th rowspan="3">Prostate</th>


            <th rowspan="3">Date</th>
            <th colspan="4">Result</th>
            <th rowspan="3">Date</th>
            <th colspan="4">Result</th>
            <th rowspan="3">Non Obstructive Azoospermia</th>
            <th rowspan="3">Obstructive Azoospermia</th>
            <th rowspan="3">Oligospermia/ Asthenospermia/Teratospermia</th>
            <th rowspan="3">Non Obstructive Azoospermia</th>
            <th rowspan="3">Obstructive Azoospermia</th>
            <th rowspan="3">Oligospermia/ Asthenospermia/Teratospermia</th>


            <th rowspan="3">Empiric</th>
            <th rowspan="3">Hormonal</th>
            <th rowspan="3">MESA</th>
            <th rowspan="3">PESA</th>
            <th rowspan="3">TESA</th>
            <th rowspan="3">TESE</th>
            <th rowspan="3">Anastomosis </th>
        </tr>
        <tr>
            <th rowspan="2">Infertility Duration</th>
            <th rowspan="2">Total Child</th>

            <th colspan="2">Orkidometer</th>
            <th colspan="2">Volume (cc)</th>
            <th rowspan="2">Normal</th>
            <th rowspan="2">Abnormal</th>
            <th rowspan="2">Nodule</th>
            <th rowspan="2">Normal</th>
            <th rowspan="2">Abnormal</th>
            <th rowspan="2">Nodule</th>


            <th rowspan="2">Volume</th>
            <th rowspan="2">Sperm Total</th>
            <th rowspan="2">Motility</th>
            <th rowspan="2">Normal Shape</th>
            <th rowspan="2">Volume</th>
            <th rowspan="2">Sperm Total</th>
            <th rowspan="2">Motility</th>
            <th rowspan="2">Normal Shape</th>
        </tr>
        <tr>
            <th>Dextra</th>
            <th>Sinistra</th>
            <th>Dextra</th>
            <th>Sinistra</th>
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


            <td>{{$item->anamnesis->main_complaint ?? ''}}</td>
            @php $value = $item->marital_status ?? 0 @endphp
            <td>
                @if($value == 0) No @endif
            </td>
            <td>
                @if($value == 1) 
                    {{$item->operative_pre->infertility_duration ?? ''}} 
                @endif
            </td>
            <td>
                @if($value == 1) 
                    {{$item->operative_pre->total_child ?? ''}} 
                @endif
            </td>
            @php $value = $item->operative_pre->semen_discharge_ejaculation ?? 0 @endphp
            <td>
                @if($value == 'normal') Yes @endif
            </td>
            <td>
                @if($value == 'few') Yes @endif
            </td>
            <td>
                @if($value == 'nothing') Yes @endif
            </td>

            <td>
                @php $value = $item->operative_pre->erection_morning ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->erection_stimulation ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->pain_post_ejaculation ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->hematospermia ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->uretritis_history ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->iritative_symptomps ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->secondary_sex_abnormalities ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->other_congenital_disease ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->scrotal_tenderness ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->inguinal_mass ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->history_udt ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->history_varicocele ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->history_trauma ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->history_genital_surgery ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->history_reccurent_uti ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->history_malignancy ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                {{$item->operative_pre->history_others ?? ''}}
            </td>
            <td>
                @php $value = $item->operative_pre->history_family_infertility ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                {{$item->operative_pre->wife_status_past_pregnancy ?? ''}}
            </td>
            <td>
                {{$item->operative_pre->wife_status_abortion ?? ''}}
            </td>
            <td>
                {{$item->operative_pre->wife_status_family_plan ?? ''}}
            </td>
            <td>
                {{$item->physical_exam->testes_orkidometer_dex ?? ''}}
            </td>
            <td>
                {{$item->physical_exam->testes_orkidometer_sin ?? ''}}
            </td>
            <td>
                {{$item->physical_exam->testes_vol_dex ?? ''}}
            </td>
            <td>
                {{$item->physical_exam->testes_vol_sin ?? ''}}
            </td>
            @php $value = $item->physical_exam->epididimis_condition ?? '' @endphp
            <td>@if($value == 'normal') Yes @endif </td>
            <td>@if($value == 'abnormal') Yes @endif </td>
            <td>@if($value == 'nodule') Yes @endif </td>
            @php $value = $item->physical_exam->vas_deferens_condition ?? '' @endphp
            <td>@if($value == 'normal') Yes @endif </td>
            <td>@if($value == 'abnormal') Yes @endif </td>
            <td>@if($value == 'nodule') Yes @endif </td>
            
            <td>
                @php $value = $item->physical_exam->urethritis ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>{{unslugify($item->physical_exam->prostate_status) ?? ''}} </td>

            <td>{{$item->penunjang_lab_pre->date ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->semen_volume ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->semen_sperm ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->semen_motility ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->semen_normal_shape ?? ''}}</td>

            <td>{{$item->penunjang_lab_post->date ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->semen_volume ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->semen_sperm ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->semen_motility ?? ''}}</td>
            <td>{{$item->penunjang_lab_post->semen_normal_shape ?? ''}}</td>

            <td>{{$item->penunjang_lab_pre->fsh ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->lh ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->testoteron ?? ''}}</td>
            <td>{{$item->operative_pre->chromosomal_analysis ?? ''}}</td>
            <td>{{$item->penunjang_lab_pre->other ?? ''}}</td>
            @php 
                $files_names = [];
                $files_names[] = 'imaging-testicle-usg'; 
                $files_names[] = 'imaging-transrectal-usg'; 
                $files_names[] = 'imaging-other'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach
            <td>{{$item->penunjang_lab_pre->pathology_results ?? ''}}</td>

            <td>
                @php $value = $item->operative_pre->diagnosis_p_infertile_nonobs_azoo ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->diagnosis_p_infertile_obs_azoo ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>{{unslugify($item->operative_pre->diagnosis_p_infertile_sperm_type) ?? ''}}
            </td>
            <td>
                @php $value = $item->operative_pre->diagnosis_s_infertile_nonobs_azoo ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_pre->diagnosis_s_infertile_obs_azoo ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>{{unslugify($item->operative_pre->diagnosis_s_infertile_sperm_type) ?? ''}}
            </td>


            <td>
                @php $value = $item->operative_intra->non_invasive_empiric ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_intra->non_invasive_hormonal ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_intra->invasive_mesa ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_intra->invasive_pesa ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_intra->invasive_tesa ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_intra->invasive_tese ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>
                @php $value = $item->operative_intra->invasive_anastomosis ?? 0 @endphp
                @if($value == 1) Yes @endif
            </td>
            <td>{{$item->operative_intra->treatment_others ?? ''}}</td>
            <td>{{$item->operative_intra->operation_date ?? ''}}</td>

            @php 
                $files_names = [];
                $files_names[] = 'intra-clinical'; 
            @endphp 

            @foreach($files_names as $index => $title)
            <td>
                @include('kasus.components-print.file-view',['kasus'=>$item,'slug'=>$files_names[$index]])
            </td>
            @endforeach


            <td>{{$item->operative_post->follow_up_complaint ?? ''}}</td>
            <td>{{$item->operative_post->follow_up_assessment ?? ''}}</td>
            <td>{{$item->operative_post->follow_up_other ?? ''}}</td>

           

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>