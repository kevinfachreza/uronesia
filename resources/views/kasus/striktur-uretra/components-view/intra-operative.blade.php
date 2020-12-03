<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h4 class="display-4">INTRA OPERATIVE</h4>

        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Operator</td>
                <td style="width: 20px">:</td>
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
        'name'=>'ops_tindakan_dilatation_shape'])

        <h6 style="font-weight: 600" class="text-primary">DVIU</h6>
        @include('kasus.components-form.radio-button-yes-no-view',
        ['default'=> $kasus->ops_tindakan_dilatation_cold_knife, 'label'=>'Cold Knife ',
        'name'=>'ops_tindakan_dilatation_cold_knife'])
        @include('kasus.components-form.radio-button-yes-no-view',
        ['default'=> $kasus->ops_tindakan_dilatation_laser, 'label'=>'Laser ',
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
                <td style="width: 150px">Others</td>
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
                <td style="width: 150px">Others</td>
                <td style="width: 20px">:</td>
                <td>{{$kasus->ops_graft_garcilis_other}}</td>
            </tr>
        </table>
    </div>

    <div class="col-12">
        <h5>Striktur</h5>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Location</td>
                <td style="width: 20px">:</td>
                <td>{{$kasus->ops_striktur_lokasi}} cm</td>
            </tr>
            <tr>
                <td>Length</td>
                <td>:</td>
                <td>{{$kasus->ops_striktur_panjang}} cm</td>
            </tr>
            <tr>
                <td>Etiology</td>
                <td>:</td>
                <td>{{$kasus->ops_striktur_penyebab}} cm</td>
            </tr>
        </table>

    </div>
</div>

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'Clinical Picture Pre Operative';
                $files_title[] = 'Clinical Picture Intra Operative';
                $files_title[] = 'Clinical Picture Post Operative';

                $files_names[] = 'pre-ops'; 
                $files_names[] = 'intra-ops'; 
                $files_names[] = 'post-ops'; 
            @endphp 


            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach        
            
            
        </div>
    </div>
</div>
