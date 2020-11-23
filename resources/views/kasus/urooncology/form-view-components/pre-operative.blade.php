<div class="row">
    <div class="col-12">
        <h5>Anamnesis</h5>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">MAIN COMPLAINT</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->main_complaint ?? ''}} (Since {{$kasus->anamnesis->main_complaint_since ?? ''}})</td>
            </tr>
            <tr>
                <td>History Of Urinary Tract Stone</td>
                <td>:</td>
                <td>
                    @php $val = $kasus->anamnesis->history_of_urinarytract_stone ?? '' @endphp
                    @if($val == 1) Yes ( Location : {{$kasus->anamnesis->history_of_urinarytract_stone_location}} )
                    @elseif($val == 0)
                    No
                    @else
                    -
                    @endif
                </td>
            </tr>
            <tr>
                <td>History Of Urology Surgery</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->history_of_urology_surgery ?? ''}}</td>
            </tr>
            <tr>
                <td>Karnofsky</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->karnofsky ?? ''}}</td>
            </tr>
            <tr>
                <td>IIEF-5</td>
                <td>:</td>
                <td>{{$kasus->anamnesis->iief5 ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5>Physical Examination</h5>
        <h6 style="font-weight: 600" class="text-primary">Renal</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Mass</td>
                <td style="width: 5px">:</td>
                <td>{{unslugify($kasus->physical_exam->renal_mass) ?? ''}}</td>
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->renal_size) ?? ''}}</td>
            </tr>
            <tr>
                <td>Solid</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->renal_solid) ?? ''}}</td>
            </tr>
            <tr>
                <td>Cystic</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->renal_cystic) ?? ''}}</td>
            </tr>
            <tr>
                <td>Fixed</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->renal_fixed) ?? ''}}</td>
            </tr>
            <tr>
                <td>Pain</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->renal_pain) ?? ''}}</td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Bladder</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Full</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->bladder_full = 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Mass</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->bladder_mass ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Penis</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Circumcision</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->penis_circumcision = 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Mass</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->penis_mass ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Testes</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Size</td>
                <td style="width: 5px">:</td>
                <td>{{unslugify($kasus->physical_exam->testes_size) ?? ''}}</td>
            </tr>
            <tr>
                <td>Consistency</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->testes_consistency) ?? ''}}</td>
            </tr>
            <tr>
                <td>Hydrocele</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->testes_hydrocele) ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Inguinal Gland</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Size</td>
                <td style="width: 5px">:</td>
                <td>{{unslugify($kasus->physical_exam->inguinal_gland_size) ?? ''}}</td>
            </tr>
            <tr>
                <td>Fixed</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->inguinal_gland_fixed) ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Supraclavicula Gland</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Size</td>
                <td style="width: 5px">:</td>
                <td>{{unslugify($kasus->physical_exam->superclavicula_gland_size) ?? ''}}</td>
            </tr>
            <tr>
                <td>Fixed</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->superclavicula_gland_fixed) ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Prostate</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Weight (gr)</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->prostate_weight ?? ''}}</td>
            </tr>
            <tr>
                <td>Surface</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->prostate_surface ?? ''}}</td>
            </tr>
            <tr>
                <td>Consistency</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->prostate_consistency ?? ''}}</td>
            </tr>
            <tr>
                <td>Pain</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->prostate_pain ?? ''}}</td>
            </tr>
            <tr>
                <td>Nodul</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->prostate_nodul ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">HB</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>L</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_l ?? ''}}</td>
            </tr>
            <tr>
                <td>T</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_t ?? ''}}</td>
            </tr>
            <tr>
                <td>LED</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_led ?? ''}}</td>
            </tr>
            <tr>
                <td>DIFF COUNT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_diff_count ?? ''}}</td>
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
                <td>Glucose N</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_glucose_n ?? ''}}</td>
            </tr>
            <tr>
                <td>Glucose PP</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_glucose_pp ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Tumor Marker</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Alkali Phospatase</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_alkali_phospatase ?? ''}}</td>
            </tr>
            <tr>
                <td>A Fetoprotein</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_a_fetoprotein ?? ''}}</td>
            </tr>
            <tr>
                <td>B HCG</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_b_hcg ?? ''}}</td>
            </tr>
            <tr>
                <td>LDH</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ldh ?? ''}}</td>
            </tr>
            <tr>
                <td>PSA</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_psa ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Urine</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Urinalysis - Eritrocyte</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_eritrosit ?? ''}}</td>
            </tr>
            <tr>
                <td>Urinalysis - Leucocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_leukosit ?? ''}}</td>
            </tr>
            <tr>
                <td>Culture - Bacteria</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_bacteria ?? ''}}</td>
            </tr>
            <tr>
                <td>Culture - Sensitive</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}</td>
            </tr>
            <tr>
                <td>Culture - Resistance</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}</td>
            </tr>
            <tr>
                <td>Cytology - Class</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cytology_class ?? ''}}</td>
            </tr>
            <tr>
                <td>Cytology - Grade</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cytology_grade ?? ''}}</td>
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
                $files_title[] = 'Thorax';
                $files_title[] = 'BNO/IVP';
                $files_title[] = 'USG';
                $files_title[] = 'CT';
                $files_title[] = 'MRI';
                $files_title[] = 'Bone Scan';
                $files_title[] = 'Urethrocystoscopy';

                $files_names[] = 'radiology-pre-thorax'; 
                $files_names[] = 'radiology-pre-bnoivp'; 
                $files_names[] = 'radiology-pre-usg'; 
                $files_names[] = 'radiology-pre-ct'; 
                $files_names[] = 'radiology-pre-mri'; 
                $files_names[] = 'radiology-pre-bone'; 
                $files_names[] = 'radiology-pre-urethrocystocopy';
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>