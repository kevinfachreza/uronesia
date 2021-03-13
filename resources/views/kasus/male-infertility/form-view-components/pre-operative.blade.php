
<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATIVE</h1>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Anamnesis</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->anamnesis->main_complaint ?? ''}}</td>
            </tr>
            <tr>
                <td>Marital Status</td>
                <td>:</td>
                <td>{{$kasus->marital_status == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            @if($kasus->marital_status == 1)
            <tr>
                <td>Infertility Duration</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->infertility_duration ?? ''}}</td>
            </tr>
            <tr>
                <td>Total Child</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->total_child ?? ''}}</td>
            </tr>
            @endif
        </table>

        <h6 style="font-weight: 600" class="text-primary">History Taking</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Semen Discharge When Ejaculation</td>
                <td style="width: 10px">:</td>
                <td>{{unslugify($kasus->operative_pre->semen_discharge_ejaculation ?? '') ?? ''}}</td>
            </tr>
            <tr>
                <td>Morning Erection</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->erection_morning ?? '')}}</td>
            </tr>
            <tr>
                <td>Erection With Stimulation</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->erection_stimulation ?? '')}}</td>
            </tr>
            <tr>
                <td>Pain Post Ejaculation</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->pain_post_ejaculation ?? '')}}</td>
            </tr>
            <tr>
                <td>Hematospermia</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->hematospermia ?? '')}}</td>
            </tr>
            <tr>
                <td>Uretritis History</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->uretritis_history ?? '')}}</td>
            </tr>
            <tr>
                <td>Obstructive/Iritative Symptoms</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->iritative_symptomps ?? '')}}</td>
            </tr>
            <tr>
                <td>Secondary Sex Abnormality</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->secondary_sex_abnormalities ?? '')}}</td>
            </tr>
            <tr>
                <td>Other Congenital Disease</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->other_congenital_disease ?? '')}}</td>
            </tr>
            <tr>
                <td>Scrotal Tenderness</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->scrotal_tenderness ?? '')}}</td>
            </tr>
            <tr>
                <td>Inguinal Mass</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->inguinal_mass ?? '')}}</td>
            </tr>
        </table>
        <h6 class="text-primary">History</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">UDT</td>
                <td style="width: 10px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->history_udt ?? '')}}</td>
            </tr>
            <tr>
                <td>Varicocele</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->history_varicocele ?? '')}}</td>
            </tr>
            <tr>
                <td>Trauma</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->history_trauma ?? '')}}</td>
            </tr>
            <tr>
                <td>Genital Surgery</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->history_genital_surgery ?? '')}}</td>
            </tr>
            <tr>
                <td>Reccurent UTI</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->history_reccurent_uti ?? '')}}</td>
            </tr>
            <tr>
                <td>Malignancy</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->history_malignancy ?? '')}}</td>
            </tr>
            <tr>
                <td>Other History</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->history_others ?? ''}}</td>
            </tr>
            <tr>
                <td>Family History of Infertility</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->history_family_infertility ?? '')}}</td>
            </tr>
        </table>

        <h6 class="text-primary">Wife Status</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Past Pregnancy History</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->wife_status_past_pregnancy ?? ''}}</td>
            </tr>
            <tr>
                <td>Abortion Status</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->wife_status_abortion ?? ''}}</td>
            </tr>
            <tr>
                <td>Family Planning History</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->wife_status_family_plan ?? ''}}</td>
            </tr>
        </table>

        <h4>Physical Assessment - External Genitalia</h4>
        <h5>Testis</h5>
        <h6 class="text-primary">Orkidometer</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Sinistra</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->testes_orkidometer_dex ?? ''}}</td>
            </tr>
            <tr>
                <td>Dextra</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->testes_orkidometer_sin ?? ''}}</td>
            </tr>
        </table>
        <h6 class="text-primary">Volume (cc)</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Sinistra</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->testes_vol_dex ?? ''}} cc </td>
            </tr>
            <tr>
                <td>Dextra</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->testes_vol_sin ?? ''}} cc</td>
            </tr>
        </table>
        <h5>Others</h5>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Epididimis</td>
                <td style="width: 10px">:</td>
                <td>{{unslugify($kasus->physical_exam->epididimis_condition ?? '') ?? ''}} </td>
            </tr>
            <tr>
                <td>Vas Deferens</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->vas_deferens_condition ?? '') ?? ''}} </td>
            </tr>
            <tr>
                <td>Urethritis</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->urethritis ?? '')}}</td>
            </tr>
            <tr>
                <td>Prostate</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->prostate_status ?? '') ?? ''}} </td>
            </tr>
        </table>

    </div>
</div>


<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <table class="table table-no-border view-data">
            <tr>
                <td colspan="3"><strong class="text-primary">Semen Analysis 1</strong></td>
            </tr>
            <tr>
                <td style="width: 150px">Date</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->date ?? ''}}</td>
            </tr>
            <tr>
                <td>Volume</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->semen_volume ?? ''}}</td>
            </tr>
            <tr>
                <td>Sperm Total</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->semen_sperm ?? ''}}</td>
            </tr>
            <tr>
                <td>Motility</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->semen_motility ?? ''}}</td>
            </tr>
            <tr>
                <td>Normal Shape</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->semen_normal_shape ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="3"><strong class="text-primary">Semen Analysis 2</strong></td>
            </tr>
            <tr>
                <td>Date</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->date ?? ''}}</td>
            </tr>
            <tr>
                <td>Volume</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->semen_volume ?? ''}}</td>
            </tr>
            <tr>
                <td>Sperm Total</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->semen_sperm ?? ''}}</td>
            </tr>
            <tr>
                <td>Motility</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->semen_motility ?? ''}}</td>
            </tr>
            <tr>
                <td>Normal Shape</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->semen_normal_shape ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="3"><strong class="text-primary">Other Result</strong></td>
            </tr>
            <tr>
                <td>FSH</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->fsh ?? ''}}</td>
            </tr>
            <tr>
                <td>LH</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lh ?? ''}}</td>
            </tr>
            <tr>
                <td>Testosterone</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->testoteron ?? ''}}</td>
            </tr>
            <tr>
                <td>Chromosome Analysis</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->chromosomal_analysis ?? ''}}</td>
            </tr>
            <tr>
                <td>Other</td>
                <td>:</td>
                <td style="white-space: pre">{{$kasus->penunjang_lab_pre->other ?? ''}}</td>
            </tr>
            <tr>
                <td>Pathology Result</td>
                <td>:</td>
                <td style="white-space: pre">{{$kasus->penunjang_lab_pre->pathology_results ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>



<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
            $files_title[] = 'Testicle USG';
            $files_title[] = 'USG Transrectal';
            $files_title[] = 'Other';

            $files_names[] = 'imaging-testicle-usg'; 
            $files_names[] = 'imaging-transrectal-usg'; 
            $files_names[] = 'imaging-other'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5>Diagnosis</h5>
        <table class="table table-no-border view-data">
            <tr>
                <td colspan="3"><strong class="text-primary">Primary Infertility</strong></td>
            </tr>
            <tr>
                <td style="width: 150px"> Non Obstructive Azoospermia</td>
                <td style="width: 5px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->diagnosis_p_infertile_nonobs_azoo ?? '')}}</td>
            </tr>
            <tr>
                <td> Obstructive Azoospermia</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->diagnosis_p_infertile_obs_azoo ?? '')}}</td>
            </tr>
            <tr>
                <td>Sperm Amount</td>
                <td>:</td>
            </tr>
            <tr>
                <td>
                    <ul>
                        @php $value = $kasus->operative_pre->diagnosis_p_infertile_sp_am_oligo ?? 0 @endphp
                        @if($value)
                            <li>Oligospermia</li>
                        @endif
                        @php $value = $kasus->operative_pre->diagnosis_p_infertile_sp_am_oligo ?? 0 @endphp
                        @if($value)
                            <li>Asthenospermia</li>
                        @endif
                        @php $value = $kasus->operative_pre->diagnosis_p_infertile_sp_am_oligo ?? 0 @endphp
                        @if($value)
                            <li>Teratospermia</li>
                        @endif
                    </ul>

                </td>
            </tr>
            <tr>
                <td colspan="3"><strong class="text-primary">Secondary Infertility</strong></td>
            </tr>
            <tr>
                <td style="width: 150px"> Non Obstructive Azoospermia</td>
                <td style="width: 5px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->diagnosis_s_infertile_nonobs_azoo ?? '')}}</td>
            </tr>
            <tr>
                <td> Obstructive Azoospermia</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_pre->diagnosis_s_infertile_obs_azoo ?? '')}}</td>
            </tr>
            <tr>
                <td>Sperm Amount</td>
                <td>:</td>
            </tr>
            <tr>
                <td>
                    <ul>
                        @php $value = $kasus->operative_pre->diagnosis_s_infertile_sp_am_oligo ?? 0 @endphp
                        @if($value)
                            <li>Oligospermia</li>
                        @endif
                        @php $value = $kasus->operative_pre->diagnosis_s_infertile_sp_am_oligo ?? 0 @endphp
                        @if($value)
                            <li>Asthenospermia</li>
                        @endif
                        @php $value = $kasus->operative_pre->diagnosis_s_infertile_sp_am_oligo ?? 0 @endphp
                        @if($value)
                            <li>Teratospermia</li>
                        @endif
                    </ul>

                </td>
            </tr>
        </table>
    </div>
</div>