    @extends('layouts.app')

    @section('content')
    <div class="container main-content py-4">
        <div class="row">
            <div class="col-12">
                <h4 class="display-3">Kasus Striktur Uretra</h4>
                <a class="btn btn-primary" href="{{url('')}}/kasus/striktur-uretra/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
                <hr>
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-12">
                            <h4  class="display-4">DATA PASIEN</h4>
                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">No RM</td>
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
                                    <td>{{$kasus->pasien->jenis_kelamin == 'lk' ? 'Laki laki' : 'Perempuan'}}</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->age}}</td>
                                </tr>
                                <tr>
                                    <td>Tinggi Badan</td>
                                    <td>:</td>
                                    <td>{{$kasus->tb}} cm</td>
                                </tr>
                                <tr>
                                    <td>Berat Badan</td>
                                    <td>:</td>
                                    <td>{{$kasus->bb}} kg</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr style="width: 100%">
                            <h1 class="display-4">PRE OPERASI</h1>

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">Tanggal Operasi</td>
                                    <td>:</td>
                                    <td>{{$kasus->tanggal_operasi}}</td>
                                </tr>
                                <tr>
                                    <td>Lama Rawat Inap</td>
                                    <td>:</td>
                                    <td>{{$kasus->lama_perawatan_hari}} hari</td>
                                </tr>
                                <tr>
                                    <td>Diagnosis</td>
                                    <td>:</td>
                                    <td>{{$kasus->diagnosis}}</td>
                                </tr>
                                <tr>
                                    <td>Komorbid</td>
                                    <td>:</td>
                                    <td>{{$kasus->komorbid}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kasus</td>
                                    <td>:</td>
                                    <td>{{$kasus->is_kasus_baru == 1 ? 'Baru' : 'Lama'}}</td>
                                </tr>
                                <tr>
                                    <td>Riwayat Operasi</td>
                                    <td>:</td>
                                    <td>{{$kasus->riwayat_operasi}}</td>
                                </tr>
                                <tr>
                                    <td>Hasil Radiologi</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_radiologi}}</td>
                                </tr>
                                <tr>
                                    <td>Hasil Lab</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab}}</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-12">
                            <hr style="width: 100%">
                            <h4 class="display-4">INTRA OPERASI</h4>

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">Operator</td>
                                    <td>:</td>
                                    <td>{{$kasus->ops_operator}}</td>
                                </tr>
                            </table>

                        </div>

                        <div class="col-12">
                            <h5>TINDAKAN OPERASI</h5>
                            @include('kasus.components-form.radio-button-yes-no-view',
                            ['default'=> $kasus->ops_tindakan_sachse, 'label'=>'Sachse',
                            'name'=>'ops_tindakan_sachse'])
                            <h6 style="font-weight: 600">EPA</h6>
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_bulbar_mobilisasi, 'label'=>'Bulbar Mobilisasi','name'=>'ops_tindakan_bulbar_mobilisasi'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus-> ops_tindakan_crucal_separasi,'label'=>'Crucal Separasi','name'=>'ops_tindakan_crucal_separasi'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus-> ops_tindakan_inferior_pubektomi,'label'=>'Inferior Pubektomi','name'=>'ops_tindakan_inferior_pubektomi'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_supercrucal_rerouting ,'label'=>'Supracrural Rerouting','name'=>'ops_tindakan_supercrucal_rerouting'])
                            <hr>
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_one_side_dissection, 'label'=>'One Side Dissection','name'=>'ops_tindakan_one_side_dissection'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_johansen, 'label'=>'Johansen','name'=>'ops_tindakan_johansen'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_perineal_urethrostomy, 'label'=>'Perineal Urethrostomy','name'=>'ops_tindakan_perineal_urethrostomy'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_double_face, 'label'=>'Double Face','name'=>'ops_tindakan_double_face'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_ventral, 'label'=>'Ventral','name'=>'ops_tindakan_ventral'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_dorsal_onlay, 'label'=>'Dorsal Onlay','name'=>'ops_tindakan_dorsal_onlay'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_dorsal_inlay, 'label'=>'Dorsal Inlay','name'=>'ops_tindakan_dorsal_inlay'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_asopa, 'label'=>'Asopa','name'=>'ops_tindakan_asopa'])
                        </div>


                        <div class="col-12">
                            <h5>Graft/Flap</h5>
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_cheek, 'label'=>'Cheek','name'=>'ops_graft_cheek'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_upper_lip, 'label'=>'Upper Lip','name'=>'ops_graft_upper_lip'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_lower_lip, 'label'=>'Lower Lip','name'=>'ops_graft_lower_lip'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_lingual, 'label'=>'Lingual','name'=>'ops_graft_lingual'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_gracilis, 'label'=>'Gracilis','name'=>'ops_graft_gracilis'])
                        </div>

                        <div class="col-12">
                            <h5>Striktur</h5>

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">Lokasi</td>
                                    <td>:</td>
                                    <td>{{$kasus->ops_striktur_lokasi}}</td>
                                </tr>
                                <tr>
                                    <td>Panjang</td>
                                    <td>:</td>
                                    <td>{{$kasus->ops_striktur_panjang}} cm</td>
                                </tr>
                                <tr>
                                    <td>Penyebab</td>
                                    <td>:</td>
                                    <td>{{$kasus->ops_striktur_penyebab}}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-12">
                            <h5>Foto Klinis PreOps</h5>
                            <div class="row">
                                @foreach($kasus->penunjang_pre as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <a href="{{url('')}}/{{$penunjang->path}}">
                                            <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>Foto Klinis PostOps</h5>
                            <div class="row">
                                @foreach($kasus->penunjang_post as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <a href="{{url('')}}/{{$penunjang->path}}">
                                            <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                                        </a>
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
                        <table class="table table-no-border">
                            <tr>
                                <td style="width: 150px">Pre Ops</td>
                                <td>:</td>
                                <td>{{$kasus->ops_skor_ereksi_pre_ops}}</td>
                            </tr>
                            <tr>
                                <td>Post Ops</td>
                                <td>:</td>
                                <td>{{$kasus->ops_skor_ereksi_post_ops}}</td>
                            </tr>
                        </table>

                    </div>

                    <div class="col-12">
                        <hr>
                        @include('kasus.components-form.radio-button-2-opsi-view',['default'=> $kasus->ops_post_chordee,'label'=>'Chordee','name'=>'ops_post_chordee','options' => ['Tidak','Ada']])
                        <hr>
                        <h5>Panjang Penis (cm)</h5>
                        <table class="table table-no-border">
                            <tr>
                                <td style="width: 150px">Pre Ops</td>
                                <td>:</td>
                                <td>{{$kasus->ops_panjang_penis_pre_ops}} cm</td>
                            </tr>
                            <tr>
                                <td>Post Ops</td>
                                <td>:</td>
                                <td>{{$kasus->ops_panjang_penis_post_ops}} cm</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-2-opsi-view',['default'=> $kasus->ops_perikateter_urethrografi,'label'=>'Perikateter Urethrografi','name'=>'ops_perikateter_urethrografi','options' => ['Tidak','Leakage']])
                    </div>
                    <div class="col-12">
                        <h5>Uroflowmetry</h5>
                        @include('kasus.components-form.uriflowmetry-view',['bulan_ke'=>[1,3,6,9,12,24,60],'default' => $uriflowmetry])
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
