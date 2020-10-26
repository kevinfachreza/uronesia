    @extends('layouts.app')

    @section('content')
    <div class="container main-content py-4">
        <div class="row">
            <div class="col-12">
                <h4 class="display-3">Striktur Uretra Case</h4>
                <hr>
                <form method="POST" action="{{url('kasus/striktur-uretra')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-12">
                            <h4  class="display-4">PATIENTS DATA</h4>
                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 100px">MEDICAL RECORD</td>
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
                                    <td>{{$kasus->pasien->jenis_kelamin == 'lk' ? 'Man' : 'Woman'}}</td>
                                </tr>
                                <tr>
                                    <td>AGE (Years)</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->age}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Height (cm)</label>
                                <input type="number" class="form-control" name="tb" value="{{$kasus->tb}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Weight (kg)</label>
                                <input type="number" class="form-control" name="bb" value="{{$kasus->bb}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr style="width: 100%">
                            <h1 class="display-4">PRE OPERATION</h1>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Operation Date</label>
                                <input type="date" class="form-control" name="tanggal_operasi" value="{{$kasus->tanggal_operasi}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Length of Stay (days)</label>
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
                                <label class="label">Comorbid</label>
                                <input type="text" class="form-control" name="komorbid" value="{{$kasus->komorbid}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Case</label>
                                <select class="form-control" name="is_kasus_baru">
                                    <option value="0" @if($kasus->is_kasus_baru == 0) selected @endif>Redo</option>
                                    <option value="1" @if($kasus->is_kasus_baru == 1) selected @endif>New</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Surgical History</label>
                                <input type="text" class="form-control" name="riwayat_operasi" value="{{$kasus->riwayat_operasi}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Radiology Result</label>
                                <input type="text" class="form-control" name="penunjang_radiologi" value="{{$kasus->penunjang_radiologi}}">
                            </div>
                        </div>
                         <div class="col-12">
                            <h5>Radiology Pictures</h5>
                            <input type="file" name="file_radiology[]">
                            <div id="foto-klinis-radiology-container">
                            </div>
                            <button class="btn btn-info btn-sm mt-3"  type="button"  id="foto-klinis-radiology-add"><i class="fa fa-plus"></i> Add Photo</button>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                @foreach($kasus->penunjang_radiology as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">

                                    </div>
                                    <div class="form-group mt-1">
                                        <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                                            <option value="0">Keep Picture</option>
                                            <option value="1">Delete</option>
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Laboratory Result</h4>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">HB</label>
                                        <input type="text" class="form-control" name="penunjang_lab_hb" value="{{$kasus->penunjang_lab_hb}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">HT</label>
                                        <input type="text" class="form-control" name="penunjang_lab_ht" value="{{$kasus->penunjang_lab_ht}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">L</label>
                                        <input type="text" class="form-control" name="penunjang_lab_l" value="{{$kasus->penunjang_lab_l}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">TR</label>
                                        <input type="text" class="form-control" name="penunjang_lab_tr" value="{{$kasus->penunjang_lab_tr}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">UR</label>
                                        <input type="text" class="form-control" name="penunjang_lab_ur" value="{{$kasus->penunjang_lab_ur}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">CR</label>
                                        <input type="text" class="form-control" name="penunjang_lab_cr" value="{{$kasus->penunjang_lab_cr}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">Urine Culture - Bacteria</label>
                                        <input type="text" class="form-control" name="penunjang_lab_bacteria" value="{{$kasus->penunjang_lab_bacteria}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">Urine Culture - Sensitive</label>
                                        <input type="text" class="form-control" name="penunjang_lab_sensitive" value="{{$kasus->penunjang_lab_sensitive}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">Urine Culture - Resistance</label>
                                        <input type="text" class="form-control" name="penunjang_lab_resistance" value="{{$kasus->penunjang_lab_resistance}}">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-12">
                            <hr style="width: 100%">
                            <h4 class="display-4">INTRA OPERATION</h4>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="label">Operator</label>
                                <input type="text" class="form-control" name="ops_operator" value="{{$kasus->ops_operator}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>SURGICAL TECHNIQUES</h5>
                           <h6 style="font-weight: 600" class="text-primary">DILATATION</h6>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dilatation_bougi, 'label'=>'Bougi ','name'=>'ops_tindakan_dilatation_bougi'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dilatation_shape, 'label'=>'S-Shape Dilator ','name'=>'ops_tindakan_dilatation_shape'])

                           <h6 style="font-weight: 600" class="text-primary">DVIU</h6>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dilatation_cold_knife, 'label'=>'Cold Knife ','name'=>'ops_tindakan_dilatation_cold_knife'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dilatation_laser, 'label'=>'Laser ','name'=>'ops_tindakan_dilatation_laser'])

                            <h6 style="font-weight: 600" class="text-primary">EPA TRANSPERINEAL</h6>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_bulbar_mobilisasi, 'label'=>'Bulbar Mobilization','name'=>'ops_tindakan_bulbar_mobilisasi'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus-> ops_tindakan_crucal_separasi,'label'=>'Crural Separation ','name'=>'ops_tindakan_crucal_separasi'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus-> ops_tindakan_inferior_pubektomi,'label'=>'Inferior Pubectomy ','name'=>'ops_tindakan_inferior_pubektomi'])
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_supercrucal_rerouting ,'label'=>'Supracrural Rerouting','name'=>'ops_tindakan_supercrucal_rerouting'])

                            <h6 style="font-weight: 600" class="text-primary">EPA TRANSABDOMINAL</h6>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_omental_wrap ,'label'=>'Omental Wrap','name'=>'ops_tindakan_omental_wrap'])
                            <hr>

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_non_transecting, 'label'=>'Non Transecting','name'=>'ops_tindakan_non_transecting'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_johansen, 'label'=>'Johanson','name'=>'ops_tindakan_johansen'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_staged, 'label'=>'Staged','name'=>'ops_tindakan_staged'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dorsal_inlay, 'label'=>'Dorsal Inlay','name'=>'ops_tindakan_dorsal_inlay'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_dorsal_onlay, 'label'=>'Dorsal Onlay','name'=>'ops_tindakan_dorsal_onlay'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_one_side_dissection, 'label'=>'One Side Dissection','name'=>'ops_tindakan_one_side_dissection'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_ventral_inlay, 'label'=>'Ventral Inlay','name'=>'ops_tindakan_ventral_inlay'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_ventral_onlay, 'label'=>'Ventral Onlay','name'=>'ops_tindakan_ventral_onlay'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_double_face, 'label'=>'Double Face','name'=>'ops_tindakan_double_face'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_tindakan_perineal_urethrostomy, 'label'=>'Perineal Urethrostomy','name'=>'ops_tindakan_perineal_urethrostomy'])

                            <div class="form-group">
                                <label class="label">Other</label>
                                <input type="text" class="form-control" name="ops_tindakan_other" value="{{$kasus->ops_tindakan_other}}">
                            </div>
                        </div>


                        <div class="col-12">
                            <h5>Graft/Flap</h5>
                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_cheek, 'label'=>'Cheek','name'=>'ops_graft_cheek'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_upper_lip, 'label'=>'Upper Lip','name'=>'ops_graft_upper_lip'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_lower_lip, 'label'=>'Lower Lip','name'=>'ops_graft_lower_lip'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_lingual, 'label'=>'Lingual','name'=>'ops_graft_lingual'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_preputial, 'label'=>'Preputial','name'=>'ops_graft_preputial'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_penlie_skin, 'label'=>'Penlie Skin','name'=>'ops_graft_penlie_skin'])

                            @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->ops_graft_gracilis, 'label'=>'Gracilis','name'=>'ops_graft_gracilis'])
                            <div class="form-group">
                                <label class="label">Other</label>
                                <input type="text" class="form-control" name="ops_graft_garcilis_other" value="{{$kasus->ops_graft_garcilis_other}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>Striktur</h5>
                            <div class="form-group">
                                <label class="label">Location</label>
                                <input type="text" class="form-control" name="ops_striktur_lokasi" value="{{$kasus->ops_striktur_lokasi}}">
                            </div>
                            <div class="form-group">
                                <label class="label">Length (cm)</label>
                                <input type="text" class="form-control" name="ops_striktur_panjang" value="{{$kasus->ops_striktur_panjang}}">
                            </div>
                            <div class="form-group">
                                <label class="label">Etiology</label>
                                <input type="text" class="form-control" name="ops_striktur_penyebab" value="{{$kasus->ops_striktur_penyebab}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>Clinical Picture Pre Operation</h5>
                            <input type="file" name="file_pre[]">
                            <div id="foto-klinis-pre-ops-container">
                            </div>
                            <button class="btn btn-info btn-sm mt-3"  type="button"  id="foto-klinis-pre-ops-add"><i class="fa fa-plus"></i> Add Photo</button>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                @foreach($kasus->penunjang_pre as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">

                                    </div>
                                    <div class="form-group mt-1">
                                        <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                                            <option value="0">Keep Picture</option>
                                            <option value="1">Delete</option>
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>Clinical Picture Intra Operation</h5>
                            <input type="file" name="file_intra[]">
                            <div id="foto-klinis-intra-ops-container">
                            </div>
                            <button class="btn btn-info btn-sm mt-3"  type="button"  id="foto-klinis-intra-ops-add"><i class="fa fa-plus"></i> Add Photo</button>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                @foreach($kasus->penunjang_intra as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">

                                    </div>
                                    <div class="form-group mt-1">
                                        <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                                            <option value="0">Keep Picture</option>
                                            <option value="1">Delete</option>
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12">
                            <h5>Clinical Picture Post Operation</h5>
                            <input type="file" name="file_post[]">
                            <div id="foto-klinis-post-ops-container">
                            </div>
                            <button class="btn btn-info btn-sm mt-3"  type="button"  id="foto-klinis-post-ops-add"><i class="fa fa-plus"></i> Add Photo</button>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                @foreach($kasus->penunjang_post as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">

                                    </div>
                                    <div class="form-group mt-1">
                                        <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                                            <option value="0">Keep Picture</option>
                                            <option value="1">Delete</option>
                                        </select>
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
                        @include('kasus.components-form.radio-button-2-opsi',['default'=> $kasus->ops_post_chordee,'label'=>'Chordee','name'=>'ops_post_chordee','options' => ['No','Yes']])
                        <hr>
                        <h5>Penile Length (cm)</h5>
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
                        @include('kasus.components-form.radio-button-2-opsi',['default'=> $kasus->ops_perikateter_urethrografi,'label'=>'Pericatheter Urethrography','name'=>'ops_perikateter_urethrografi','options' => ['None','Leakage']])
                    </div>
                    <div class="col-12">
                            <h5>Pericatheter Urethrography Picture</h5>
                            <input type="file" name="file_urethrography[]">
                            <div id="foto-klinis-urethrography-ops-container">
                            </div>
                            <button class="btn btn-info btn-sm mt-3"  type="button"  id="foto-klinis-urethrography-ops-add"><i class="fa fa-plus"></i> Add Photo</button>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                @foreach($kasus->penunjang_urethrography as $penunjang)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div style="border:solid 1px #eee; text-align: center;height: 100px">
                                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">

                                    </div>
                                    <div class="form-group mt-1">
                                        <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                                            <option value="0">Keep Picture</option>
                                            <option value="1">Delete</option>
                                        </select>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    <div class="col-12">
                        <h5>Uroflowmetry</h5>
                        @include('kasus.components-form.uriflowmetry',['bulan_ke'=>[1,3,6,9,12,24,60],'default' => $uriflowmetry])
                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('#foto-klinis-post-ops-add').click(function(){
        var file_input = `<div class="mt-2"><input type="file" name="file_post[]"></div>`
        $('#foto-klinis-post-ops-container').append(file_input)
    })
    $('#foto-klinis-pre-ops-add').click(function(){
        var file_input = `<div class="mt-2"><input type="file" name="file_pre[]"></div>`
        $('#foto-klinis-pre-ops-container').append(file_input)
    })
    $('#foto-klinis-intra-ops-add').click(function(){
        var file_input = `<div class="mt-2"><input type="file" name="file_intra[]"></div>`
        $('#foto-klinis-intra-ops-container').append(file_input)
    })
    $('#foto-klinis-urethrography-ops-add').click(function(){
        var file_input = `<div class="mt-2"><input type="file" name="file_urethrography[]"></div>`
        $('#foto-klinis-urethrography-ops-container').append(file_input)
    })
    $('#foto-klinis-radiology-add').click(function(){
        var file_input = `<div class="mt-2"><input type="file" name="file_radiology[]"></div>`
        $('#foto-klinis-radiology-container').append(file_input)
    })


</script>
@endsection
