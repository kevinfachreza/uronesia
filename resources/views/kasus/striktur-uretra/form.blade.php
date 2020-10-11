    @extends('layouts.app')

    @section('content')
    <div class="container main-content py-4">
        <div class="row">
            <div class="col-12">
                <h4 class="display-3">Kasus Striktur Uretra</h4>
                <hr>
                <form method="POST" action="{{url('kasus/striktur-uretra')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-12">
                            <h4  class="display-4">DATA PASIEN</h4>
                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 100px">No RM</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->no_rm}}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td style="width: 10px">:</td>
                                    <td>{{$kasus->pasien->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->jenis_kelamin}}</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->age}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control" name="tb" value="{{$kasus->tb}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Berat Badan (kg)</label>
                                <input type="number" class="form-control" name="bb" value="{{$kasus->bb}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr style="width: 100%">
                            <h1 class="display-4">PRE OPERASI</h1>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Tanggal Operasi</label>
                                <input type="date" class="form-control" name="tanggal_operasi" value="{{$kasus->tanggal_operasi}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Lama Rawat Inap (hari)</label>
                                <input type="number" class="form-control" name="lama_perawatan_hari" value="{{$kasus->lama_perawatan_hari}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Diagnosis</label>
                                <input type="text" class="form-control" name="diagnosis" value="{{$kasus->diagnosis}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Komorbid</label>
                                <input type="text" class="form-control" name="komorbid" value="{{$kasus->komorbid}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Jenis kasus</label>
                                <select class="form-control" name="is_kasus_baru">
                                    <option value="0" @if($kasus->is_kasus_baru == 0) selected @endif>Lama</option>
                                    <option value="1" @if($kasus->is_kasus_baru == 1) selected @endif>Baru</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Riwayat Operasi</label>
                                <input type="text" class="form-control" name="riwayat_operasi" value="{{$kasus->riwayat_operasi}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Hasil Radiologi</label>
                                <input type="text" class="form-control" name="penunjang_radiologi" value="{{$kasus->penunjang_radiologi}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Hasil Lab</label>
                                <input type="text" class="form-control" name="penunjang_lab" value="{{$kasus->penunjang_lab}}">
                            </div>
                        </div>



                        <div class="col-12">
                            <hr style="width: 100%">
                            <h4 class="display-4">INTRA OPERASI</h4>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Operator</label>
                                <input type="text" class="form-control" name="ops_operator" value="{{$kasus->ops_operator}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>TINDAKAN OPERASI</h5>
                            @include('kasus.components-form.radio-button-yes-no',
                            ['default'=> $kasus-> ops_tindakan_sachse, 'label'=>'Sachse',
                            'name'=>'ops_tindakan_sachse'])
                            <h6 style="font-weight: 600">EPA</h6>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_bulbar_mobilisasi, 'label'=>'Bulbar Mobilisasi','name'=>'ops_tindakan_bulbar_mobilisasi'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus-> ops_tindakan_crucal_separasi,'label'=>'Crucal Separasi','name'=>'ops_tindakan_crucal_separasi'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus-> ops_tindakan_inferior_pubektomi,'label'=>'Inferior Pubektomi','name'=>'ops_tindakan_inferior_pubektomi'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_supercrucal_rerouting ,'label'=>'Supracrural Rerouting','name'=>'ops_tindakan_supercrucal_rerouting'])
                            <hr>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_one_side_dissection, 'label'=>'One Side Dissection','name'=>'ops_tindakan_one_side_dissection'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_johansen, 'label'=>'Johansen','name'=>'ops_tindakan_johansen'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_perineal_urethrostomy, 'label'=>'Perineal Urethrostomy','name'=>'ops_tindakan_perineal_urethrostomy'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_double_face, 'label'=>'Double Face','name'=>'ops_tindakan_double_face'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_ventral, 'label'=>'Ventral','name'=>'ops_tindakan_ventral'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dorsal_onlay, 'label'=>'Dorsal Onlay','name'=>'ops_tindakan_dorsal_onlay'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dorsal_inlay, 'label'=>'Dorsal Inlay','name'=>'ops_tindakan_dorsal_inlay'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_asopa, 'label'=>'Asopa','name'=>'ops_tindakan_asopa'])
                        </div>


                        <div class="col-12">
                            <h5>Graft/Flap</h5>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_cheek, 'label'=>'Cheek','name'=>'ops_graft_cheek'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_upper_lip, 'label'=>'Upper Lip','name'=>'ops_graft_upper_lip'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_lower_lip, 'label'=>'Lower Lip','name'=>'ops_graft_lower_lip'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_lingual, 'label'=>'Lingual','name'=>'ops_graft_lingual'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_gracilis, 'label'=>'Gracilis','name'=>'ops_graft_gracilis'])
                        </div>

                        <div class="col-12">
                            <h5>Striktur</h5>
                            <div class="form-group">
                                <label class="label">Lokasi</label>
                                <input type="text" class="form-control" name="ops_striktur_lokasi" value="{{$kasus->ops_striktur_lokasi}}">
                            </div>
                            <div class="form-group">
                                <label class="label">Panjang (cm)</label>
                                <input type="text" class="form-control" name="ops_striktur_panjang" value="{{$kasus->ops_striktur_panjang}}">
                            </div>
                            <div class="form-group">
                                <label class="label">Penyebab</label>
                                <input type="text" class="form-control" name="ops_striktur_penyebab" value="{{$kasus->ops_striktur_penyebab}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>Foto Klinis PreOps</h5>
                            <input type="file" name="file_pre[]" multiple>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                @foreach($kasus->penunjang_pre as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 200px; max-width: 100px;">

                                    </div>
                                    <div class="form-group mt-1">
                                        <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                                            <option value="0">Simpan Foto</option>
                                            <option value="1">Hapus</option>
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>Foto Klinis PostOps</h5>
                            <input type="file" name="file_post[]" multiple>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                @foreach($kasus->penunjang_post as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 200px; max-width: 100px;">

                                    </div>
                                    <div class="form-group mt-1">
                                        <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                                            <option value="0">Simpan Foto</option>
                                            <option value="1">Hapus</option>
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <hr style="width: 100%">
                        <h4 class="display-4">POST OPERASI</h4>
                        <h5>Skor Ereksi</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="label">Pre Ops</label>
                            <input type="number" class="form-control" name="ops_skor_ereksi_pre_ops" value="{{$kasus->ops_skor_ereksi_pre_ops}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="label">Post Ops</label>
                            <input type="number" class="form-control" name="ops_skor_ereksi_post_ops" value="{{$kasus->ops_skor_ereksi_post_ops}}">
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                        @include('kasus.components-form.radio-button-2-opsi',['default'=> $kasus->ops_post_chordee,'label'=>'Chordee','name'=>'ops_post_chordee','options' => ['Tidak','Ada']])
                        <hr>
                        <h5>Panjang Penis (cm)</h5>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="label">Pre Ops</label>
                            <input type="number" class="form-control" name="ops_panjang_penis_pre_ops" value="{{$kasus->ops_panjang_penis_pre_ops}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="label">Post Ops</label>
                            <input type="number" class="form-control" name="ops_panjang_penis_post_ops" value="{{$kasus->ops_panjang_penis_post_ops}}">
                        </div>
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-2-opsi',['default'=> $kasus->ops_perikateter_urethrografi,'label'=>'Perikateter Urethrografi','name'=>'ops_perikateter_urethrografi','options' => ['Tidak','Leakage']])
                    </div>
                    <div class="col-12">
                        <h5>Uriflowmetry</h5>
                        @include('kasus.components-form.uriflowmetry',['bulan_ke'=>[1,3,6,9,12,24,60],'default' => $uriflowmetry])
                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
</script>
@endsection
