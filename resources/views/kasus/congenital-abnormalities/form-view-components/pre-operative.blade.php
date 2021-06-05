<div class="row">
    <div class="col-12">
        <h4 class="display-4">PRE OPERATIVE</h4>
        <h6>Length of Stay : <span style="font-weight: 400">{{$kasus->lama_perawatan_hari}} days</span></h6>
        <h5>Anamnesis</h5>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Main Complaint</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->anamnesis->main_complaint ?? ''}}</td>
            </tr>
            <tr>
                <td>Others Complaint</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->complaint_others ?? ''}}</td>
            </tr>

        </table>
        <h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Premature</td>
                <td style="width: 10px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_premature ?? '')}}</td>
            </tr>
            <tr>
                <td>Hypospadia</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_hypospadia ?? '')}}</td>
            </tr>
            <tr>
                <td>Ambigous Genitalia</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_ambigous_genitalia ?? '')}}</td>
            </tr>
            <tr>
                <td>Anorectal Malformation</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_anorectal_malformation ?? '')}}</td>
            </tr>
            <tr>
                <td>Down Syndrome</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_down_syndrome ?? '')}}</td>
            </tr>
            <tr>
                <td>Omphalocele</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_omphalocele ?? '')}}</td>
            </tr>
            <tr>
                <td>Gastrosciziz</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->comorbid_gastrosciziz ?? '')}}</td>
            </tr>
            <tr>
                <td>Others</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_others ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Surgical History</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Surgical History</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->surgical_history ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5>Undescended Testis</h5>
        <h6 style="font-weight: 600" class="text-primary">Right Testis</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Palpable</td>
                <td style="width: 5px">:</td>
                <td>{{unslugify($kasus->physical_exam->testes_right_palpable ?? '')}}</td>
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->testes_right_palpable_size ?? ''}}</td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->testes_right_palpable_pos ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Left Testis</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Palpable</td>
                <td style="width: 5px">:</td>
                <td>{{unslugify($kasus->physical_exam->testes_left_palpable ?? '')}}</td>
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->testes_left_palpable_size ?? ''}}</td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->testes_left_palpable_pos ?? ''}}</td>
            </tr>
        </table>

        <h5>Bladder Extrophy</h5>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Epispadia</td>
                <td style="width: 5px">:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->bladder_epispadia ?? '')}}</td>
            </tr>
            <tr>
                <td>Classic Extrophy</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->bladder_gender ?? '')}}</td>
            </tr>
            <tr>
                <td>Cloacal Extrophy</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->bladder_cloacal_extrophy ?? '')}}</td>
            </tr>
        </table>

        <h5>Child Hydronephrosis</h5>

        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Other Complain</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->child_hydro_other_complain ?? ''}}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->child_hydro_gender ?? '')}}</td>
            </tr>
            <tr>
                <td>History Antenatal Care</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_history_antenatal_care ?? ''}}</td>
            </tr>
            <tr>
                <td>History Perinatal</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_perinatal ?? ''}}</td>
            </tr>
            <tr>
                <td>Developmental Status</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_developmental_status ?? ''}}</td>
            </tr>
            <tr>
                <td>Other Congenital Disease</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_other_congenital_status ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Physical Examination</h6>


        <h6>General Status</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Head Dismorphic</td>
                <td style="width: 5px">:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->child_hydro_head_dismorphic ?? '')}}</td>
            </tr>
            <tr>
                <td>Abdominal Mass</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->child_hydro_abdominal_mass ?? '')}}</td>
            </tr>
            <tr>
                <td>Meningocele/Spina Bifida</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->child_hydro_meningocele ?? '')}}</td>
            </tr>
            <tr>
                <td>Limb</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->child_hydro_limb ?? '')}}</td>
            </tr>
        </table>
        <h6>Urological Status</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Flank</td>
                <td style="width: 5px">:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->child_hydro_urogical_flank ?? '')}}</td>
            </tr>
            <tr>
                <td>Suprapubic</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->child_hydro_urogical_suprapubic ?? '')}}</td>
            </tr>
            <tr>
                <td>External Genitalia</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->child_hydro_ext_genitalia ?? '')}}</td>
            </tr>
        </table>


        <h5>Hypospadia</h5>
        <h6 style="font-weight: 600" class="text-primary">Physical Examination</h6>

        <h6 class="text-primary">Site of Urethral Meatus <small>Before Chordee Correction</small></h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_site_urethral_before ?? '',
        'name'=>'physical_exam__hypospadia_site_urethral_before',
        'path' => url('img/hypospadia'),
        'options' => ['1-glanular.jpg','1-distal-penile.jpg','1-proximal.jpg'],
        'values'=>['glanular','distal-penile','proximal'],
        'titles'=>['Glanular Hypospadias','Distal Penile Hypospadias','Proximal Hypospadias']])

        <h6 class="text-primary">Site of Urethral Meatus <small>After Chordee Correction</small></h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_site_urethral_after ?? '',
        'name'=>'physical_exam__hypospadia_site_urethral_after',
        'path' => url('img/hypospadia'),
        'options' => ['2-glanular.jpg','2-distal-penile.jpg','2-proximal.jpg'],
        'values'=>['glanular','distal-penile','proximal'],
        'titles'=>['Glanular Hypospadias','Distal Penile Hypospadias','Proximal Hypospadias']])

        <h6 class="text-primary">Prepuce</h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_prepuce ?? '',
        'name'=>'physical_exam__hypospadia_prepuce',
        'path' => url('img/hypospadia'),
        'options' => ['3-complete.jpg','3-incomplete.jpg'],
        'values'=>['complete','incomplete'],
        'titles'=>['Complete','Incomplete']])

        <h6 class="text-primary">Glans</h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_glans ?? '',
        'name'=>'physical_exam__hypospadia_glans',
        'path' => url('img/hypospadia'),
        'options' => ['4-cleft.jpg','4-incomplete-cleft.jpg','4-flat.jpg'],
        'values'=>['cleft','incomplete-cleft','flat'],
        'titles'=>['Cleft','Incomplete Cleft','Flat']])

        <h6 class="text-primary">Chordee</h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_chordee ?? '',
        'name'=>'physical_exam__hypospadia_chordee',
        'path' => url('img/hypospadia'),
        'options' => ['5-no.jpg','5-superficial.jpg','5-deep.jpg'],
        'values'=>['no','superficial','deep'],
        'titles'=>['No Chordee','Superficial Chordee','Deep Chordee']])

        <h6 class="text-primary">Urethral Plate Width</h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_urethral_plate_width ?? '',
        'name'=>'physical_exam__hypospadia_urethral_plate_width',
        'path' => url('img/hypospadia'),
        'options' => ['6-less.jpg','6-more.jpg'],
        'values'=>['less','more'],
        'titles'=>['<1cm','>=1cm']])

        <h6 class="text-primary">Penile Torsion</h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_penile_torsion ?? '',
        'name'=>'physical_exam__hypospadia_penile_torsion',
        'path' => url('img/hypospadia'),
        'options' => ['7-no.jpg','7-present.jpg'],
        'values'=>['no','present'],
        'titles'=>['No Torsion','Present']])

        <h6 class="text-primary">Penile Torsion</h6>

        @include('kasus.components-view.radio-button-multi-opsi-images',[
        'label'=>'',
        'default'=> $kasus->physical_exam->hypospadia_scrotal_transposition ?? '',
        'name'=>'physical_exam__hypospadia_scrotal_transposition',
        'path' => url('img/hypospadia'),
        'options' => ['8-no.jpg','8-present.jpg'],
        'values'=>['no','present'],
        'titles'=>['No Transposition','Present']])

        <h6>Others Data</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td>History Of Surgery</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->hypospadia_surgical_history ?? ''}}</td>
            </tr>
            <tr>
                <td>Others</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->hypospadia_others ?? ''}}</td>
            </tr>
        </table>


        <h5>Other Congenital Abnormalities</h5><br>
        
        <table class="table table-no-border view-data"><tr><td>{{$kasus->physical_exam->other_congenital_abnormalities ?? ''}}</td></tr>
        </table>
    </div>
</div>


<div class="row mt-2">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">HB</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ht ?? ''}}</td>
            </tr>
            <tr>
                <td>Leucocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>Trombocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_trombocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}</td>
            </tr>
            <tr>
                <td>Na</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_na ?? ''}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_k ?? ''}}</td>
            </tr>
        </table>
        
        <h6 style="font-weight: 600" class="text-primary">Urine Culture</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td>BACTERIA</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_bacteria ?? ''}}</td>
            </tr>
            <tr>
                <td>SENSITIVE</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}</td>
            </tr>
            <tr>
                <td>RESISTANCE</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}</td>
            </tr>
        </table>

        <h6 class="mb-0">Chromosomal Analysis</h6>
        <span>{{$kasus->operative_pre->chromosomal_analysis ?? ''}}</span>
    </div>
</div>




<div class="row files-upload mt-2">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Radiology Result</h5>
            </div>
            @php 
            $files_title[] = 'USG';
            $files_title[] = 'BNO';
            $files_title[] = 'IVP';
            $files_title[] = 'CT';
            $files_title[] = 'MRI';
            $files_title[] = 'VCUG';

            $files_names[] = 'radiology-pre-usg'; 
            $files_names[] = 'radiology-pre-bno'; 
            $files_names[] = 'radiology-pre-ivp'; 
            $files_names[] = 'radiology-pre-ct'; 
            $files_names[] = 'radiology-pre-mri'; 
            $files_names[] = 'radiology-pre-vcug'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            <div class="col-12">
                <h6 class="mb-0">Renogram</h6>
                <span>{{$kasus->operative_pre->renogram ?? ''}}</span>

                <h6 class="mb-0 mt-2">Final Diagnosis</h6>
                <span>{{$kasus->operative_pre->final_diagnosis ?? ''}}</span>
            </div>
            
        </div>
    </div>
</div>