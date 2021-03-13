<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATIVE</h1>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="label">Main Complaint</label>
            <input type="text" class="form-control" name="anamnesis__main_complaint" value="{{$kasus->anamnesis->main_complaint ?? ''}}">
        </div>
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->marital_status ?? '','label'=>'Marital Status','name'=>'marital_status'])
    </div>
    <div class="col-12 marital-status-married" style="display: none">
        <div class="form-group">
            <label class="label">Infertility Duration</label>
            <input type="text" class="form-control" name="pre_operative__infertility_duration" value="{{$kasus->operative_pre->infertility_duration ?? ''}}">
        </div>
    </div>
    <div class="col-12 marital-status-married" style="display: none">
        <div class="form-group">
            <label class="label">Total Child</label>
            <input type="text" class="form-control" name="pre_operative__total_child" value="{{$kasus->operative_pre->total_child ?? ''}}">
        </div>
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_pre->semen_discharge_ejaculation ?? '','label'=>'Semen Discharge When Ejaculation','name'=>'pre_operative__semen_discharge_ejaculation','options' => ['Normal','Few','Nothing']])
    </div>
    <h6 class="text-primary">Erection</h6>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->erection_morning ?? '','label'=>'Morning Erection','name'=>'pre_operative__erection_morning'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->erection_stimulation ?? '','label'=>'Erection With Stimulation','name'=>'pre_operative__erection_stimulation'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->pain_post_ejaculation ?? '','label'=>'Pain Post Ejaculation','name'=>'pre_operative__pain_post_ejaculation'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->hematospermia ?? '','label'=>'Hematospermia','name'=>'pre_operative__hematospermia'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->uretritis_history ?? '','label'=>'Uretritis History','name'=>'pre_operative__uretritis_history'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->iritative_symptomps ?? '','label'=>'Obstructive/Iritative Symptoms','name'=>'pre_operative__iritative_symptomps'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->secondary_sex_abnormalities ?? '','label'=>'Secondary Sex Abnormality','name'=>'pre_operative__secondary_sex_abnormalities'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->other_congenital_disease ?? '','label'=>'Other Congenital Disease','name'=>'pre_operative__other_congenital_disease'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->scrotal_tenderness ?? '','label'=>'Scrotal Tenderness','name'=>'pre_operative__scrotal_tenderness'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->inguinal_mass ?? '','label'=>'Inguinal Mass','name'=>'pre_operative__inguinal_mass'])
    </div>
    <h6 class="text-primary">History</h6>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->history_udt ?? '','label'=>'UDT','name'=>'pre_operative__history_udt'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->history_varicocele ?? '','label'=>'Varicocele','name'=>'pre_operative__history_varicocele'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->history_trauma ?? '','label'=>'Trauma','name'=>'pre_operative__history_trauma'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->history_genital_surgery ?? '','label'=>'Genital Surgery','name'=>'pre_operative__history_genital_surgery'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->history_reccurent_uti ?? '','label'=>'Reccurent UTI','name'=>'pre_operative__history_reccurent_uti'])
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->history_malignancy ?? '','label'=>'Malignancy','name'=>'pre_operative__history_malignancy'])
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="label">Other History</label>
            <input type="text" class="form-control" name="pre_operative__history_others" value="{{$kasus->operative_pre->history_others ?? ''}}">
        </div>
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->history_family_infertility ?? '','label'=>'Family History of Infertility','name'=>'pre_operative__history_family_infertility'])
    </div>

    <h6 class="text-primary">Wife Status</h6>

    <div class="col-12">
        <div class="form-group">
            <label class="label">Past Pregnancy History</label>
            <input type="text" class="form-control" name="pre_operative__wife_status_past_pregnancy" value="{{$kasus->operative_pre->wife_status_past_pregnancy ?? ''}}">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="label">Abortion Status</label>
            <input type="text" class="form-control" name="pre_operative__wife_status_abortion" value="{{$kasus->operative_pre->wife_status_abortion ?? ''}}">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="label">Family Planning History</label>
            <input type="text" class="form-control" name="pre_operative__wife_status_family_plan" value="{{$kasus->operative_pre->wife_status_family_plan ?? ''}}">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h4>Physical Assessment - External Genitalia</h4>
    </div>
    <div class="col-12">
        <h5>Testis</h5>
        <h6 class="text-primary">Orkidometer</h6>

        <div class="form-group">
            <label class="label">Dextra</label>
            <input type="text" class="form-control" name="physical_exam__testes_orkidometer_dex" value="{{$kasus->physical_exam->testes_orkidometer_dex ?? ''}}">
        </div>
        <div class="form-group">
            <label class="label">Sinistra</label>
            <input type="text" class="form-control" name="physical_exam__testes_orkidometer_sin" value="{{$kasus->physical_exam->testes_orkidometer_sin ?? ''}}">
        </div>

        <h6 class="text-primary">Volume (cc)</h6>

        <div class="form-group">
            <label class="label">Dextra</label>
            <input type="number" class="form-control" name="physical_exam__testes_vol_dex" value="{{$kasus->physical_exam->testes_vol_dex ?? ''}}">
        </div>
        <div class="form-group">
            <label class="label">Sinistra</label>
            <input type="number" class="form-control" name="physical_exam__testes_vol_sin" value="{{$kasus->physical_exam->testes_vol_sin ?? ''}}">
        </div>


        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->epididimis_condition ?? '','label'=>'Epididimis','name'=>'physical_exam__epididimis_condition','options' => ['Normal','Abnormal','Nodule']])

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->vas_deferens_condition ?? '','label'=>'Vas Deferens','name'=>'physical_exam__vas_deferens_condition','options' => ['Normal','Abnormal','Nodule']])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->urethritis ?? '','label'=>'Urethritis','name'=>'physical_exam__urethritis'])

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->prostate_status ?? '','label'=>'Prostate','name'=>'physical_exam__prostate_status','options' => ['Normal','Abnormal']])


    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h4>Laboratory Result</h4>
                <h6 class="text-primary">Semen Analysis 1</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Date</label>
                    <input type="date" class="form-control" name="penunjang_lab_pre__date" value="{{$kasus->penunjang_lab_pre->date ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Volume</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__semen_volume" value="{{$kasus->penunjang_lab_pre->semen_volume ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Sperm Total</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__semen_sperm" value="{{$kasus->penunjang_lab_pre->semen_sperm ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Motility</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__semen_motility" value="{{$kasus->penunjang_lab_pre->semen_motility ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Normal Shape</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__semen_normal_shape" value="{{$kasus->penunjang_lab_pre->semen_normal_shape ?? ''}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="text-primary">Semen Analysis 2</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Date</label>
                    <input type="date" class="form-control" name="penunjang_lab_post__date" value="{{$kasus->penunjang_lab_post->date ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Volume</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__semen_volume" value="{{$kasus->penunjang_lab_post->semen_volume ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Sperm Total</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__semen_sperm" value="{{$kasus->penunjang_lab_post->semen_sperm ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Motility</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__semen_motility" value="{{$kasus->penunjang_lab_post->semen_motility ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Normal Shape</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__semen_normal_shape" value="{{$kasus->penunjang_lab_post->semen_normal_shape ?? ''}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="text-primary">Other Result</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">FSH</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__fsh" value="{{$kasus->penunjang_lab_pre->fsh ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">LH</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lh" value="{{$kasus->penunjang_lab_pre->lh ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Testosterone</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__testoteron" value="{{$kasus->penunjang_lab_pre->testoteron ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Chromosome Analysis</label>
                    <input type="text" class="form-control" name="pre_operative__chromosomal_analysis" value="{{$kasus->operative_pre->chromosomal_analysis ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Other</label>
                    <textarea class="form-control" name="penunjang_lab_pre__other" >{{$kasus->penunjang_lab_pre->other ?? ''}}</textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Pathology Result</label>
                    <textarea class="form-control" name="penunjang_lab_pre__pathology_results" value="">{{$kasus->penunjang_lab_pre->pathology_results ?? ''}}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Imaging Result</h5>
            </div>
            @php 
            $files_title[] = 'Testicle USG';
            $files_title[] = 'USG Transrectal';
            $files_title[] = 'Other';

            $files_names[] = 'imaging-testicle-usg'; 
            $files_names[] = 'imaging-transrectal-usg'; 
            $files_names[] = 'imaging-other'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5>Diagnosis</h5>
    </div>
    <div class="col-12">
        <h6 class="text-primary">Primary Infertility</h6>
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_p_infertile_nonobs_azoo ?? '','label'=>'Non Obstructive Azoospermia','name'=>'pre_operative__diagnosis_p_infertile_nonobs_azoo'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_p_infertile_obs_azoo ?? '','label'=>'Obstructive Azoospermia','name'=>'pre_operative__diagnosis_p_infertile_obs_azoo'])

        <label>SPERM AMOUNT</label>

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_p_infertile_sp_am_oligo ?? '','label'=>' Oligospermia','name'=>'pre_operative__diagnosis_p_infertile_sp_am_oligo'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_p_infertile_sp_am_astheno ?? '','label'=>' Asthenospermia','name'=>'pre_operative__diagnosis_p_infertile_sp_am_astheno'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_p_infertile_sp_am_teratos ?? '','label'=>' Teratospermia','name'=>'pre_operative__diagnosis_p_infertile_sp_am_teratos'])


        <h6 class="text-primary">Secondary Infertility</h6>
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_s_infertile_nonobs_azoo ?? '','label'=>'Non Obstructive Azoospermia','name'=>'pre_operative__diagnosis_s_infertile_nonobs_azoo'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_s_infertile_obs_azoo ?? '','label'=>'Obstructive Azoospermia','name'=>'pre_operative__diagnosis_s_infertile_obs_azoo'])

        <label>SPERM AMOUNT</label>

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_s_infertile_sp_am_oligo ?? '','label'=>' Oligospermia','name'=>'pre_operative__diagnosis_s_infertile_sp_am_oligo'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_s_infertile_sp_am_astheno ?? '','label'=>' Asthenospermia','name'=>'pre_operative__diagnosis_s_infertile_sp_am_astheno'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->diagnosis_s_infertile_sp_am_teratos ?? '','label'=>' Teratospermia','name'=>'pre_operative__diagnosis_s_infertile_sp_am_teratos'])

    </div>
</div>