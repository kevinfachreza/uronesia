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
<table id="example" class="display nowrap dataTable no-footer table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th colspan="9">Patient Data</th>
            <th colspan="9">Pre Operation</th>
            <th colspan="35">Intra Operation</th>
            <th colspan="16">Post Operation</th>
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

            <th rowspan="3">Operator</th>
            <th colspan="20">Surgical Techniques</th>
            <th colspan="8">Graft/Flap</th>
            <th colspan="3">Stricture</th>
            <th colspan="3">Clinical Picture</th>

            <th colspan="2">Erection Hardness Score</th>
            <th colspan="2">Chordee</th>
            <th colspan="2">Penile Length (cm)</th>
            <th colspan="3">Pericatheter Urethrography</th>
            <th colspan="7">Uroflowmetry</th>

        </tr>
        <tr>
            <th colspan="2">Dilatation</th>
            <th colspan="2">DVIU</th>
            <th colspan="4">EPA Transperineal</th>
            <th colspan="1">EPA Transabdominal</th>
            <th rowspan="2">Non Transecting</th>
            <th rowspan="2">Johanson</th>
            <th rowspan="2">Staged</th>
            <th rowspan="2">Dorsal Onlay</th>
            <th rowspan="2">Dorsal Inlay</th>
            <th rowspan="2">One Side Dissection</th>
            <th rowspan="2">Ventral Inlay</th>
            <th rowspan="2">Ventral Onlay</th>
            <th rowspan="2">Double Face</th>
            <th rowspan="2">Perineal Urethrostomy</th>
            <th rowspan="2">Others</th>
            <th rowspan="2">Cheek</th>
            <th rowspan="2">Upper Lip</th>
            <th rowspan="2">Lower Lip</th>
            <th rowspan="2">Lingual</th>
            <th rowspan="2">Preputial</th>
            <th rowspan="2">Penile Skin</th>
            <th rowspan="2">Gracilis</th>
            <th rowspan="2">Others</th>

            <th rowspan="2">Location</th>
            <th rowspan="2">Length (cm)</th>
            <th rowspan="2">Etiology</th>

            <th rowspan="2">Pre Operation</th>
            <th rowspan="2">Intra Operation</th>
            <th rowspan="2">Post Operation</th>

            <th rowspan="2">Pre Operation</th>
            <th rowspan="2">Post Operation</th>

            <th rowspan="2">Yes</th>
            <th rowspan="2">No</th>

            <th rowspan="2">Pre Operation</th>
            <th rowspan="2">Post Operation</th>

            <th rowspan="2">Leakage</th>
            <th rowspan="2">No Leakage</th>
            <th rowspan="2">Picture</th>

            <th rowspan="2">1st Month</th>
            <th rowspan="2">3rd Month</th>
            <th rowspan="2">6th Month</th>
            <th rowspan="2">9th Month</th>
            <th rowspan="2">12th Month</th>
            <th rowspan="2">2nd Year</th>
            <th rowspan="2">5th Year</th>
        </tr>
        <tr>
            <th>Bougi</th>
            <th>S-Shape Dilator</th>
            <th>Cold Knife</th>
            <th>Laser</th>
            <th>Bulbar Mobilization</th>
            <th>Crural Separation</th>
            <th>Inferior Pubectomy</th>
            <th>Supracrural Rerouting</th>
            <th>Omental Wrap</th>
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
            <td>{{$item->ops_operator}}</td>
            <td>{{$item->ops_tindakan_dilatation_bougi == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_dilatation_shape == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_dilatation_cold_knife == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_dilatation_laser == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_bulbar_mobilisasi == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_crucal_separasi == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_inferior_pubektomi == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_supercrucal_rerouting == 1 ? 'Yes' : 'No'}}</td>

            <td>{{$item->ops_tindakan_omental_wrap == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_non_transecting == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_johansen == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_staged == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_dorsal_inlay == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_dorsal_onlay == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_one_side_dissection == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_ventral_inlay == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_ventral_onlay == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_double_face == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_perineal_urethrostomy == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_tindakan_other}}</td>
            <td>{{$item->ops_graft_cheek == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_graft_upper_lip == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_graft_lower_lip == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_graft_lingual == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_graft_preputial == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_graft_penlie_skin == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_graft_gracilis == 1 ? 'Yes' : 'No'}}</td>
            <td>{{$item->ops_graft_garcilis_other}}</td>

            <td>{{$item->ops_striktur_lokasi}}</td>
            <td>{{$item->ops_striktur_panjang}}</td>
            <td>{{$item->ops_striktur_penyebab}}</td>
            <td>
                @foreach($item->penunjang_pre as $penunjang)
                <a class="" href="{{url($penunjang->path)}}" target="_blank">#File{{$loop->iteration}}</a><br>
                @endforeach
            </td>
            <td>
                @foreach($item->penunjang_intra as $penunjang)
                <a class="" href="{{url($penunjang->path)}}" target="_blank">#File{{$loop->iteration}}</a><br>
                @endforeach
            </td>
            <td>
                @foreach($item->penunjang_post as $penunjang)
                <a class="" href="{{url($penunjang->path)}}" target="_blank">#File{{$loop->iteration}}</a><br>
                @endforeach
            </td>
            <td>{{$item->ops_skor_ereksi_pre_ops}}</td>
            <td>{{$item->ops_skor_ereksi_post_ops}}</td>
            <td>{{$item->ops_post_chordee == 1 ? 'Yes' : ''}}</td>
            <td>{{$item->ops_post_chordee == 1 ? '' : 'No'}}</td>
            <td>{{$item->ops_panjang_penis_pre_ops}}</td>
            <td>{{$item->ops_panjang_penis_post_ops}}</td>
            <td>{{$item->ops_perikateter_urethrografi == 1 ? 'Yes' : ''}}</td>
            <td>{{$item->ops_perikateter_urethrografi == 1 ? '' : 'No'}}</td>
            <td>
                @foreach($item->penunjang_urethrography as $penunjang)
                <a class="" href="{{url($penunjang->path)}}" target="_blank">#File{{$loop->iteration}}</a><br>
                @endforeach
            </td>
            @php $count = 0 @endphp
            @foreach($item->uriflowmetry as $urif)
            @if($count <= 7)
            @php $count++ @endphp
            <td>
                Q-Max : {{$urif->max_rate}}<br>
                Voiding Time : {{$urif->voiding_time}}<br>
                Voiding Volume : {{$urif->volume}}<br>
                Residual Urine : {{$urif->residual_urine}}
            </td>
            @endif
            @endforeach
            @php $sisa = 7 - $count @endphp
            @for($i=1;$i<=$sisa;$i++)
            <td>
                -
            </td>
            @endfor

        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>