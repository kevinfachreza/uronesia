@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <h4>Striktur Uretra Cases</h4>
        </div>
        <div class="col-lg-4 col-md-12">
            <a href="{{url('kasus')}}/striktur-uretra/print" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> Print</a>
            <a href="{{url('kasus')}}/baru?jenis=striktur-uretra" class="btn btn-primary"><i class="fa fa-plus"></i> New Case</a>
        </div>
    </div>
    <hr style="width: 100%">
    <!-- <table id="example" class="display nowrap dataTable no-footer table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th colspan="11">Data Pasien</th>
                <th colspan="8">Pre Ops</th>
                <th colspan="23">Intra Ops</th>
                <th colspan="13">Post Ops</th>
                <th rowspan="4">Form</th>
            </tr>
            <tr>
                <th rowspan="3">No</th>
                <th rowspan="3">Nama</th>
                <th rowspan="3">No RM</th>
                <th rowspan="3">Tgl Lahir</th>
                <th rowspan="3">Usia</th>
                <th rowspan="3">JK</th>
                <th rowspan="3">TB</th>
                <th rowspan="3">BB</th>
                <th rowspan="3">BMI</th>
                <th rowspan="3">No Telp</th>
                <th rowspan="3">Tanggal Ops</th>
                <th rowspan="3">Lama Perawatan (Hari)</th>
                <th rowspan="3">Diagnosis</th>
                <th rowspan="3">Jenis Kasus</th>
                <th rowspan="3">Komorbid</th>
                <th rowspan="3">Riwayat Operasi</th>
                <th rowspan="3">Hasil Radiologi</th>
                <th rowspan="3">Hasil Lab</th>
                <th rowspan="3">Operator</th>
                <th colspan="13">Tindakan Operasi</th>
                <th colspan="5">Graft/Flap</th>
                <th colspan="3">Striktur</th>
                <th colspan="2">Foto Klinis</th>
                <th colspan="2">Skor Ereksi</th>
                <th rowspan="3">Chordee</th>
                <th colspan="2">Panjang Penis (cm)</th>
                <th rowspan="3">Perikateter Urethrografi</th>
                <th colspan="7">Uroflowmetri</th>

            </tr>
            <tr>
                <th rowspan="2">Sachse</th>
                <th colspan="4">EPA</th>
                <th rowspan="2">One Side Dissection</th>
                <th rowspan="2">Johansen</th>
                <th rowspan="2">Perineal Urethrostomy</th>
                <th rowspan="2">Double Face</th>
                <th rowspan="2">Ventral</th>
                <th rowspan="2">Dorsal Onlay</th>
                <th rowspan="2">Dorsal Inlay</th>
                <th rowspan="2">Asopa</th>
                <th rowspan="2">Cheek</th>
                <th rowspan="2">Upper Lip</th>
                <th rowspan="2">Lower Lip</th>
                <th rowspan="2">Lingual</th>
                <th rowspan="2">Gracilis</th>
                <th rowspan="2">Lokasi</th>
                <th rowspan="2">Panjang (cm)</th>
                <th rowspan="2">Penyebab</th>
                <th rowspan="2">Pre Ops</th>
                <th rowspan="2">Post Ops</th>
                <th rowspan="2">Pre Ops</th>
                <th rowspan="2">Post Ops</th>
                <th rowspan="2">Pre Ops</th>
                <th rowspan="2">Post Ops</th>
                <th rowspan="2">Bulan Ke 1</th>
                <th rowspan="2">Bulan Ke 3</th>
                <th rowspan="2">Bulan Ke 6</th>
                <th rowspan="2">Bulan Ke 9</th>
                <th rowspan="2">Bulan Ke 12</th>
                <th rowspan="2">Tahun Ke 2</th>
                <th rowspan="2">Tahun Ke 5</th>
            </tr>
            <tr>
                <th>Bulbar Mobilisasi</th>
                <th>Crural Separasi</th>
                <th>Inferior Pubektomi</th>
                <th>Supracrural Rerouting</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kasus as $item)
            <tr role="row">
                <td>{{$loop->iteration}}</td>
                <td>{{$item->pasien->nama}}</td>
                <td>{{$item->pasien->no_rm}}</td>
                <td>{{$item->pasien->tanggal_lahir}}</td>
                <td>{{$item->pasien->age}}</td>
                <td>{{$item->pasien->jenis_kelamin}}</td>
                <td>{{$item->tb}}</td>
                <td>{{$item->bb}}</td>
                <td>{{number_format($item->bb / ($item->tb*$item->tb/100/100),2) }}</td>
                <td>{{$item->pasien->nomor_telpon}}</td>
                <td>{{$item->tanggal_operasi}}</td>
                <td>{{$item->lama_perawatan_hari}}</td>
                <td>{{$item->diagnosis}}</td>
                <td>{{$item->is_kasus_baru == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->komorbid}}</td>
                <td>{{$item->riwayat_operasi}}</td>
                <td>{{$item->penunjang_radiologi}}</td>
                <td>{{$item->penunjang_lab}}</td>
                <td>{{$item->ops_operator}}</td>
                <td>{{$item->ops_tindakan_sachse == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_bulbar_mobilisasi == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_crucal_separasi == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_inferior_pubektomi == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_supercrucal_rerouting == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_one_side_dissection == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_johansen == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_perineal_urethrostomy == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_double_face == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_ventral == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_dorsal_onlay == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_dorsal_inlay == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_tindakan_asopa == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_graft_cheek == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_graft_upper_lip == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_graft_lower_lip == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_graft_lingual == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_graft_gracilis == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_striktur_lokasi}}</td>
                <td>{{$item->ops_striktur_panjang}}</td>
                <td>{{$item->ops_striktur_penyebab}}</td>
                <td>
                    @foreach($item->penunjang_pre as $penunjang)
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
                <td>{{$item->ops_post_chordee == 1 ? 'Ya' : 'Tidak'}}</td>
                <td>{{$item->ops_panjang_penis_pre_ops}}</td>
                <td>{{$item->ops_panjang_penis_post_ops}}</td>
                <td>{{$item->ops_perikateter_urethrografi == 1 ? 'Ya' : 'Tidak'}}</td>
                @php $count = 0 @endphp
                @foreach($item->uriflowmetry as $urif)
                    @if($count <= 7)
                    @php $count++ @endphp
                    <td>
                        Volume : {{$urif->volume}}<br>
                        Max Rate : {{$urif->max_rate}}<br>
                        Average Rate : {{$urif->average_rate}}<br>
                        Voiding Time : {{$urif->voiding_time}}<br>
                        Flow Time : {{$urif->flow_time}}<br>
                        Time to max flow : {{$urif->time_to_max_flow}}<br>
                        Position : {{$urif->position}}<br>
                        Weight : {{$urif->weight}}<br>
                        Symptomps : {{$urif->symptomps}}<br>
                        Advice : {{$urif->advice}}
                    </td>
                    @endif
                @endforeach
                @php $sisa = 7 - $count @endphp
                @for($i=1;$i<=$sisa;$i++)
                    <td>
                        -
                    </td>
                @endfor
                <td><a href="{{url()->current()}}/{{$item->id}}/form" class="btn btn-secondary">Form</a></td>
                
            </tr>
            @endforeach
        </tbody>
    </table> -->


    @foreach($kasus as $item)
    <div class="card card-px">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div class="card-text">#{{$loop->iteration}} - {{$item->creator->name ?? ''}}</div>
                    <div class="card-title">{{$item->pasien->nama}}</div>
                    <div class="card-text">{{$item->pasien->age}} {{$item->pasien->jenis_kelamin = 'lk' ? 'Man' : 'Woman'}}</div>
                    <div class="card-text">{{Carbon\Carbon::parse($item->tanggal_operasi)->format('d F Y')}}
                    </div>
                </div>
                <div class="col-4">
                    <a href="{{url('')}}/kasus/striktur-uretra/{{$item->id}}/form-view" class="btn btn-primary">See Case</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollX": true
        } );
    } );
</script>
@endsection
