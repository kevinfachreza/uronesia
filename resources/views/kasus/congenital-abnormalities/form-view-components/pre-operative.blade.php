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
                <td>
                   {{$kasus->anamnesis->complaint_others}}
                </td>
            </tr>
            
        </table>
        <h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Premature</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_pre->comorbid_premature == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Hypospadia</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->pre_operative__comorbid_hypospadia == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Ambigous Genitalia</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->pre_operative__comorbid_ambigous_genitalia == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Anorectal Malformation</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_anorectal_malformation == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Down Syndrome</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_down_syndrome == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Omphalocele</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_omphalocele == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Gastrosciziz</td>
                <td>:</td>
                <td>{{$kasus->operative_pre->comorbid_gastrosciziz == 1 ? 'Yes' : 'No'}}</td>
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
                <td>{{$kasus->physical_exam->testes_right_palpable == 1 ? 'Yes' : 'No'}}</td>
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
                <td>{{$kasus->physical_exam->testes_left_palpable == 1 ? 'Yes' : 'No'}}</td>
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
                <td>{{$kasus->physical_exam->bladder_epispadia == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>{{unslugify($kasus->physical_exam->bladder_gender) ?? ''}}</td>
            </tr>
            <tr>
                <td>Cloacal Extrophy</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->bladder_cloacal_extrophy ?? ''}}</td>
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
                <td>{{unslugify($kasus->physical_exam->child_hydro_gender) ?? ''}}</td>
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
                <td>{{$kasus->physical_exam->child_hydro_head_dismorphic ?? ''}}</td>
            </tr>
            <tr>
                <td>Abdominal Mass</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_abdominal_mass ?? ''}}</td>
            </tr>
            <tr>
                <td>Meningocele/Spina Bifida</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_meningocele ?? ''}}</td>
            </tr>
            <tr>
                <td>Limb</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_limb ?? ''}}</td>
            </tr>
        </table>
        <h6>Urological Status</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Flank</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->child_hydro_urogical_flank ?? ''}}</td>
            </tr>
            <tr>
                <td>Suprapubic</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_urogical_suprapubic ?? ''}}</td>
            </tr>
            <tr>
                <td>External Genitalia</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->child_hydro_ext_genitalia ?? ''}}</td>
            </tr>
        </table>


        <h5>Hypospadia</h5>
        <h6 style="font-weight: 600" class="text-primary">Physical Examination</h6>
        <h6>Glans</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Hole</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->glans_hole ?? ''}}</td>
            </tr>
            <tr>
                <td>Shape</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->glans_shape ?? ''}}</td>
            </tr>
        </table>
        <h6>Meatus</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Size</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->meatus_size ?? ''}}</td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->meatus_position ?? ''}}</td>
            </tr>
        </table>
        <h6>Phallus</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Size</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->physical_exam->phallus_size ?? ''}}</td>
            </tr>
            <tr>
                <td>Urethral Plate</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->phallus_urethral_plate ?? ''}}</td>
            </tr>
            <tr>
                <td>Chordee</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->phallus_chordee ?? ''}}</td>
            </tr>
        </table>
        <h6>Torque</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Level</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->torque_level ?? ''}}</td>
            </tr>
            <tr>
                <td>Direction</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->torque_direction ?? ''}}</td>
            </tr>
        </table>
        <h6>Foreskin</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Hooded</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->foreskin_hooded ?? ''}}</td>
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->foreskin_size ?? ''}}</td>
            </tr>
        </table>
        <h6>Penoscrotal Transposition/Scrotal Bifid</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Description</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->penoscotral_transposition ?? ''}}</td>
            </tr>
        </table>
        <h6>Testes</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">UDT</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->testes_udt ?? ''}}</td>
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->testes_size ?? ''}}</td>
            </tr>
        </table>
        <h6>Measurement (mm/Penis On Traction)</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Penoscrotal Junction - Tip</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->penis_meas_penoscrotal_junction_tip ?? ''}}</td>
            </tr>
            <tr>
                <td>Penoscrotal Junction - Meatus</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->penis_meas_penoscrotal_junction_meatus ?? ''}}</td>
            </tr>
            <tr>
                <td>Meatus - Tip</td>
                <td>:</td>
                <td>{{$kasus->physical_exam->penis_meas_meatus_tip ?? ''}}</td>
            </tr>
        </table>
        <h6>Others Data</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Hormonal Manipulated Before Surgery</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->physical_exam->hormonal_manipulated_before_surgery ?? ''}}</td>
            </tr>
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

        <h5>Other Congenital Abnormalities</h5>
        <span>{{$kasus->physical_exam->other_congenital_abnormalities ?? ''}}</span>
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