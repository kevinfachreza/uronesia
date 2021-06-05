<div class="row">
    <div class="col-12">
        <h5>Anamnesis</h5>
        <table class="table table-no-border view-data  view-data">
            <tr>
                <td style="width: 150px">Prostatismus</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->prostatismus ?? ''}}</td>
            </tr>
            <tr>
                <td>Haematuria</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->haematuria ?? ''}}</td>
            </tr>
            <tr>
                <td>UTI Symptoms</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->uti_symptoms ?? ''}}</td>
            </tr>
            <tr>
                <td>Urinary Retention</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->urinary_retention ?? ''}}</td>
            </tr>
            <tr>
                <td>History Of Prostate Surgery</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->history_of_prostate_surgery ?? ''}}</td>
            </tr>
            <tr>
                <td>History Of Vesicolithiasis Surgery</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->history_of_vesicolithiasis_surgery ?? ''}}</td>
            </tr>
            <tr>
                <td>Dauer Catheter</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->dauer_cath ?? ''}}</td>
            </tr>
            <tr>
                <td>Cystotomy</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->cystotomy ?? ''}}</td>
            </tr>
            <tr>
                <td>Prostate Biopsy Result</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->prostate_biopsi_result ?? ''}}</td>
            </tr>
            <tr>
                <td>Cystoscopy</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->cystoscopy ?? ''}}</td>
            </tr>
            <tr>
                <td>IPSS</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->ipss ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5>Physical Examination</h5>
        <h6 style="font-weight: 600" class="text-primary">CVA Tenderness</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Right</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $temp = $kasus->physical_exam->cva_tenderness_right ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Left</td>
                <td>:</td>
                <td>
                    @php $temp = $kasus->physical_exam->cva_tenderness_left ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Renal Mass</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Right</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $temp = $kasus->physical_exam->renal_mass_right ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Left</td>
                <td>:</td>
                <td>
                    @php $temp = $kasus->physical_exam->renal_mass_left ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Vesica Urinary</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Tenderness</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $temp = $kasus->physical_exam->vesica_urinary_tenderness ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Mass</td>
                <td>:</td>
                <td>
                    @php $temp = $kasus->physical_exam->vesica_urinary_mass ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary"></h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Urethral Meatus</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $temp = $kasus->physical_exam->urethral_meatus ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Hypospadia</td>
                <td>:</td>
                <td>
                    @php $temp = $kasus->physical_exam->hypospadia ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                </td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Testis Morphology</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Right</td>
                <td style="width: 5px">:</td>
                <td>    
                    @php $temp = $kasus->physical_exam->testes_morphology_right ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                    @if($temp == 'abnormal')
                    ({{$kasus->physical_exam->testes_morphology_right_text}})
                    @endif
                </td>
            </tr>
            <tr>
                <td>Left</td>
                <td>:</td>
                <td>    
                    @php $temp = $kasus->physical_exam->testes_morphology_left ?? '' @endphp
                    {{unslugify($temp ?? '') ?? ''}}
                    @if($temp == 'abnormal')
                    ({{$kasus->physical_exam->testes_morphology_left_text}})
                    @endif
                </td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Rectal Toucher</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Prostate Weight</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->rectal_toucher_prostate_weight ?? ''}}</td>
            </tr>
            <tr>
                <td>Surface</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->rectal_toucher_surface ?? ''}}</td>
            </tr>
            <tr>
                <td>Consistency</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->rectal_toucher_consistency ?? ''}}</td>
            </tr>
            <tr>
                <td>Nodul</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->rectal_toucher_nodul ?? ''}}</td>
            </tr>
            <tr>
                <td>Tenderness</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->rectal_toucher_tenderness ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Others Abnormality</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Hernia</td>
                <td style="width: 5px">:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->hernia ?? '')}}</td>
            </tr>
            <tr>
                <td>Haemorrhoid</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->physical_exam->haemorrhoid ?? '')}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Uroflowmetry</h6>
        @include('kasus.components-form.uroflowmetry-non-number-view',['bulan_ke'=>['pre'],'default' => $uriflowmetry])
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">PSA</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_psa ?? ''}}</td>
            </tr>
            <tr>
                <td>Clotting Time</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_clotting_time ?? ''}}</td>
            </tr>
            <tr>
                <td>Bleeding Time</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_bleeding_time ?? ''}}</td>
            </tr>
            <tr>
                <td>HB</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ht ?? ''}}</td>
            </tr>
            <tr>
                <td>LEU</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>TR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_tr ?? ''}}</td>
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
                <td>NA</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_na ?? ''}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_k ?? ''}}</td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Urinalysis</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">PH</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_ph ?? ''}}</td>
            </tr>
            <tr>
                <td>Specific Gravity</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_specific_gravity ?? ''}}</td>
            </tr>
            <tr>
                <td>Eritrosit</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_eritrosit ?? ''}}</td>
            </tr>
            <tr>
                <td>Leucocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_leukosit ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Urine Culture</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Pathogen</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_pathogen ?? ''}}</td>
            </tr>
            <tr>
                <td>Sensitive</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}</td>
            </tr>
            <tr>
                <td>Resistance</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Pathology Result</h6>
        <span>{{$kasus->penunjang_lab_pre->pathology_results ?? '-'}}</span>
    </div>
</div>

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Radiology Result</h5>
            </div>
            @php 
                $files_title[] = 'USG Transrectal';
                $files_title[] = 'IVP';
                $files_title[] = 'Cystography';
                $files_title[] = 'CT';
                $files_title[] = 'MRI';

                $files_names[] = 'radiology-pre-usg-transrectal'; 
                $files_names[] = 'radiology-pre-ivp'; 
                $files_names[] = 'radiology-pre-cystography'; 
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>