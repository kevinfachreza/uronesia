    @extends('layouts.app')

    @section('content')
    <div class="container main-content py-4">
        <div class="row">
            <div class="col-12">
                <h4 class="display-3">Urethral Stricture Case</h4>
                <a class="btn btn-primary" href="{{url('')}}/kasus/striktur-uretra/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
                <hr>
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-12">
                            <h4  class="display-4">PATIENTS DATA</h4>
                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">MEDICAL RECORD</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->no_rm}}</td>
                                </tr>
                                <tr>
                                    <td>NAME</td>
                                    <td style="width: 10px">:</td>
                                    <td>{{$kasus->pasien->nama}}</td>
                                </tr>
                                <tr>
                                    <td>GENDER</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->jenis_kelamin == 'lk' ? 'Men' : 'Woman'}}</td>
                                </tr>
                                <tr>
                                    <td>AGE (Years)</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->age}}</td>
                                </tr>
                                <tr>
                                    <td>HEIGHT (CM)</td>
                                    <td>:</td>
                                    <td>{{$kasus->tb}} cm</td>
                                </tr>
                                <tr>
                                    <td>WEIGHT (KG)</td>
                                    <td>:</td>
                                    <td>{{$kasus->bb}} kg</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr style="width: 100%">
                            <h1 class="display-4">PRE OPERATION</h1>

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">OPERATION DATE</td>
                                    <td style="width: 20px">:</td>
                                    <td>{{$kasus->tanggal_operasi}}</td>
                                </tr>
                                <tr>
                                    <td>LENGTH OF STAY (DAYS)</td>
                                    <td>:</td>
                                    <td>{{$kasus->lama_perawatan_hari}} days</td>
                                </tr>
                                <tr>
                                    <td>DIAGNOSIS</td>
                                    <td>:</td>
                                    <td>{{$kasus->diagnosis}}</td>
                                </tr>
                                <tr>
                                    <td>COMORBID</td>
                                    <td>:</td>
                                    <td>{{$kasus->komorbid}}</td>
                                </tr>
                                <tr>
                                    <td>CASE</td>
                                    <td>:</td>
                                    <td>{{$kasus->is_kasus_baru == 1 ? 'Baru' : 'Lama'}}</td>
                                </tr>
                                <tr>
                                    <td>SURGICAL HISTORY</td>
                                    <td>:</td>
                                    <td>{{$kasus->riwayat_operasi}}</td>
                                </tr>
                                <tr>
                                    <td>RADIOLOGY RESULT</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_radiologi}}</td>
                                </tr>
                            </table>


                            <div class="col-12">
                            <h5>Radiology Pictures</h5>
                                <div class="row">
                                    @foreach($kasus->penunjang_radiology as $penunjang)
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

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px"><strong>Laboratory Result</strong></td>
                                    <td style="width: 20px"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>HB</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_hb}}</td>
                                </tr>
                                <tr>
                                    <td>HT</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_ht}}</td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_l}}</td>
                                </tr>
                                <tr>
                                    <td>TR</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_tr}}</td>
                                </tr>
                                <tr>
                                    <td>UR</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_ur}}</td>
                                </tr>
                                <tr>
                                    <td>CR</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_cr}}</td>
                                </tr>
                                <tr>
                                    <td>URINE CULTURE - BACTERIA</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_bacteria}}</td>
                                </tr>
                                <tr>
                                    <td>URINE CULTURE - SENSITIVE</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_sensitive}}</td>
                                </tr>
                                <tr>
                                    <td>URINE CULTURE - RESISTANCE</td>
                                    <td>:</td>
                                    <td>{{$kasus->penunjang_lab_resistance}}</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-12">
                            <hr style="width: 100%">
                            <h4 class="display-4">INTRA OPERATION</h4>

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">Operator</td>
                                    <td>:</td>
                                    <td>{{$kasus->ops_operator}}</td>
                                </tr>
                            </table>

                        </div>

                        <div class="col-12">
                            <h5>SURGICAL TECHNIQUES</h5>
                            <h6 style="font-weight: 600" class="text-primary">DILATATION</h6>
                            @include('kasus.components-form.radio-button-yes-no-view',
                            ['default'=> $kasus->ops_tindakan_dilatation_bougi, 'label'=>'BOUGI '])
                            @include('kasus.components-form.radio-button-yes-no-view',
                            ['default'=> $kasus->ops_tindakan_dilatation_shape, 'label'=>'S-Shape Dilator ',
                            'name'=>'ops_tindakan_dilatation_bougi'])

                            <h6 style="font-weight: 600" class="text-primary">DVIU</h6>
                            @include('kasus.components-form.radio-button-yes-no-view',
                            ['default'=> $kasus->ops_tindakan_dilatation_shape, 'label'=>'Cold Knife ',
                            'name'=>'ops_tindakan_dilatation_cold_knife'])
                            @include('kasus.components-form.radio-button-yes-no-view',
                            ['default'=> $kasus->ops_tindakan_dilatation_shape, 'label'=>'Laser ',
                            'name'=>'ops_tindakan_dilatation_laser'])

                             <h6 style="font-weight: 600" class="text-primary">EPA TRANSPERINEAL</h6>
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_bulbar_mobilisasi, 'label'=>'Bulbar Mobilization','name'=>'ops_tindakan_bulbar_mobilisasi'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_crucal_separasi,'label'=>'Crural Separation','name'=>'ops_tindakan_crucal_separasi'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_inferior_pubektomi,'label'=>'Inferior Pubectomy','name'=>'ops_tindakan_inferior_pubektomi'])
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_supercrucal_rerouting ,'label'=>'Supracrural Rerouting','name'=>'ops_tindakan_supercrucal_rerouting'])

                            <h6 style="font-weight: 600" class="text-primary">EPA TRANSABDOMINAL</h6>
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_omental_wrap ,'label'=>'Omental Wrap','name'=>'ops_tindakan_omental_wrap'])
                            <hr>

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_non_transecting, 'label'=>'Non Transecting','name'=>'ops_tindakan_non_transecting'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_johansen, 'label'=>'Johanson','name'=>'ops_tindakan_johansen'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_staged, 'label'=>'Staged','name'=>'ops_tindakan_staged'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_dorsal_inlay, 'label'=>'Dorsal Inlay','name'=>'ops_tindakan_dorsal_inlay'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_dorsal_onlay, 'label'=>'Dorsal Onlay','name'=>'ops_tindakan_dorsal_onlay'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_one_side_dissection, 'label'=>'One Side Dissection','name'=>'ops_tindakan_one_side_dissection'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_ventral_inlay, 'label'=>'Ventral Inlay','name'=>'ops_tindakan_ventral_inlay'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_ventral_onlay, 'label'=>'Ventral Onlay','name'=>'ops_tindakan_ventral_onlay'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_double_face, 'label'=>'Double Face','name'=>'ops_tindakan_double_face'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_tindakan_perineal_urethrostomy, 'label'=>'Perineal Urethrostomy','name'=>'ops_tindakan_perineal_urethrostomy'])



                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">Other</td>
                                    <td style="width: 20px">:</td>
                                    <td>{{$kasus->ops_tindakan_other}}</td>
                                </tr>
                            </table>
                        </div>


                        <div class="col-12">
                            <h5>Graft/Flap</h5>
                            
                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_cheek, 'label'=>'Cheek','name'=>'ops_graft_cheek'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_upper_lip, 'label'=>'Upper Lip','name'=>'ops_graft_upper_lip'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_lower_lip, 'label'=>'Lower Lip','name'=>'ops_graft_lower_lip'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_lingual, 'label'=>'Lingual','name'=>'ops_graft_lingual'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_preputial, 'label'=>'Preputial','name'=>'ops_graft_preputial'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_penlie_skin, 'label'=>'Penile Skin','name'=>'ops_graft_penlie_skin'])

                            @include('kasus.components-form.radio-button-yes-no-view',['default'=> $kasus->ops_graft_gracilis, 'label'=>'Gracilis','name'=>'ops_graft_gracilis'])

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">Other</td>
                                    <td style="width: 20px">:</td>
                                    <td>{{$kasus->ops_graft_garcilis_other}}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-12">
                            <h5>Striktur</h5>

                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">LOCATION</td>
                                    <td style="width: 20px">:</td>
                                    <td>{{$kasus->ops_striktur_lokasi}}</td>
                                </tr>
                                <tr>
                                    <td>LENGTH (CM)</td>
                                    <td>:</td>
                                    <td>{{$kasus->ops_striktur_panjang}} cm</td>
                                </tr>
                                <tr>
                                    <td>ETIOLOGY</td>
                                    <td>:</td>
                                    <td>{{$kasus->ops_striktur_penyebab}}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-12">
                            <h5>Clinical Picture Pre Operation</h5>
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
                            <h5>Clinical Picture Intra Operation</h5>
                            <div class="row">
                                @foreach($kasus->penunjang_intra as $penunjang)
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
                            <h5>Clinical Picture Post Operation</h5>
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
                        <h4 class="display-4">POST OPERATION</h4>
                        <h5>Erection Hardness Score</h5>
                        <table class="table table-no-border">
                            <tr>
                                <td style="width: 150px">Pre Operation</td>
                                <td style="width: 20px">:</td>
                                <td>{{$kasus->ops_skor_ereksi_pre_ops}}</td>
                            </tr>
                            <tr>
                                <td>Post Operation</td>
                                <td>:</td>
                                <td>{{$kasus->ops_skor_ereksi_post_ops}}</td>
                            </tr>
                        </table>

                    </div>

                    <div class="col-12">
                        <hr>
                        @include('kasus.components-form.radio-button-2-opsi-view',['default'=> $kasus->ops_post_chordee,'label'=>'Chordee','name'=>'ops_post_chordee','options' => ['No','Yes']])
                        <hr>
                        <h5>Penile Length (cm)</h5>
                        <table class="table table-no-border">
                            <tr>
                                <td style="width: 150px">Pre Operation</td>
                                <td style="width: 20px">:</td>
                                <td>{{$kasus->ops_panjang_penis_pre_ops}} cm</td>
                            </tr>
                            <tr>
                                <td>Post Operation</td>
                                <td>:</td>
                                <td>{{$kasus->ops_panjang_penis_post_ops}} cm</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-2-opsi-view',['default'=> $kasus->ops_perikateter_urethrografi,'label'=>'Pericatheter Urethrography','name'=>'ops_perikateter_urethrografi','options' => ['None','Leakage']])
                    </div>

                    <div class="col-12">
                        <h5>Pericatheter Urethrography Picture</h5>
                        <div class="row">
                            @foreach($kasus->penunjang_urethrography as $penunjang)
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
