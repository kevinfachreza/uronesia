@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <h4>Daftar Kasus Striktur Uretra</h4>
        </div>
        <div class="col-lg-3 col-md-12">
            <a href="{{url('kasus')}}/baru?jenis=striktur-uretra" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Kasus Baru</a>
        </div>
    </div>
    <hr style="width: 100%">
    <table id="example" class="display nowrap dataTable no-footer table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <td colspan="11">Data Pasien</td>
                <td colspan="8">Pre Ops</td>
                <td colspan="23">Intra Ops</td>
                <td colspan="14">Post Ops</td>
            </tr>
            <tr>
                <td rowspan="3">No</td>
                <td rowspan="3">Nama</td>
                <td rowspan="3">No RM</td>
                <td rowspan="3">Tgl Lahir</td>
                <td rowspan="3">Usia</td>
                <td rowspan="3">JK</td>
                <td rowspan="3">TB</td>
                <td rowspan="3">BB</td>
                <td rowspan="3">BMI</td>
                <td rowspan="3">No Telp</td>
                <td rowspan="3">Tanggal Ops</td>
                <td rowspan="3">Lama Perawatan (Hari)</td>
                <td rowspan="3">Diagnosis</td>
                <td rowspan="3">Jenis Kasus</td>
                <td rowspan="3">Komorbid</td>
                <td rowspan="3">Riwayat Operasi</td>
                <td rowspan="3">Hasil Radiologi</td>
                <td rowspan="3">Hasil Lab</td>
                <td rowspan="3">Operator</td>
                <td colspan="13">Tindakan Operasi</td>
                <td colspan="5">Graft/Flap</td>
                <td colspan="3">Striktur</td>
                <td colspan="2">Foto Klinis</td>
                <td colspan="2">Skor Ereksi</td>
                <td rowspan="3">Chordee</td>
                <td colspan="2">Panjang Penis (cm)</td>
                <td rowspan="3">Perikateter Urethrografi</td>
                <td colspan="7">Uroflowmetri</td>

            </tr>
            <tr>
                <td rowspan="2">Sachse</td>
                <td colspan="4">EPA</td>
                <td rowspan="2">One Side Dissection</td>
                <td rowspan="2">Johansen</td>
                <td rowspan="2">Perineal Urethrostomy</td>
                <td rowspan="2">Double Face</td>
                <td rowspan="2">Ventral</td>
                <td rowspan="2">Dorsal Onlay</td>
                <td rowspan="2">Dorsal Inlay</td>
                <td rowspan="2">Asopa</td>
                <td rowspan="2">Cheek</td>
                <td rowspan="2">Upper Lip</td>
                <td rowspan="2">Lower Lip</td>
                <td rowspan="2">Lingual</td>
                <td rowspan="2">Gracilis</td>
                <td rowspan="2">Lokasi</td>
                <td rowspan="2">Panjang (cm)</td>
                <td rowspan="2">Penyebab</td>
                <td rowspan="2">Pre Ops</td>
                <td rowspan="2">Post Ops</td>
                <td rowspan="2">Pre Ops</td>
                <td rowspan="2">Post Ops</td>
                <td rowspan="2">Pre Ops</td>
                <td rowspan="2">Post Ops</td>
                <td rowspan="2">Bulan Ke 1</td>
                <td rowspan="2">Bulan Ke 3</td>
                <td rowspan="2">Bulan Ke 6</td>
                <td rowspan="2">Bulan Ke 9</td>
                <td rowspan="2">Bulan Ke 12</td>
                <td rowspan="2">Tahun Ke 2</td>
                <td rowspan="2">Tahun Ke 5</td>
            </tr>
            <tr>
                <td>Bulbar Mobilisasi</td>
                <td>Crural Separasi</td>
                <td>Inferior Pubektomi</td>
                <td>Supracrural Rerouting</td>
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
                <td>{{$item->bb / ($item->tb*$item->tb) }}</td>
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
                
            </tr>
            @endforeach
        </tbody>
    </table>
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
