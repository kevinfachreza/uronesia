@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Trauma Case</h4>
            <a class="btn btn-primary" href="{{url('')}}/kasus/trauma/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
            @include('kasus.components-view.delete-case-button')
            <hr>
            {{csrf_field()}}

            @include('kasus.layouts.form-view.patient-data')
            <div class="row">
                <div class="col-12">
                    <hr style="width: 100%">
                    <h1 class="display-4">PRE OPERATIVE</h1>

                    <table class="table table-no-border view-data">
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
                            <td>DIAGNOSIS (AAST)</td>
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
                            <td>{{$kasus->is_kasus_baru == 1 ? 'New' : 'Redo'}}</td>
                        </tr>
                        <tr>
                            <td>SURGICAL HISTORY</td>
                            <td>:</td>
                            <td>{{$kasus->riwayat_operasi}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            @include('kasus.layouts.form-view.pre-ops-radiology')
            @include('kasus.layouts.form-view.pre-ops-lab-sm')
            <div class="row">
                <div class="col-12">
                    <h6 class="display-4">History Taking</h6>
                    <table class="table table-no-border">
                        <tr>
                            <td style="width: 150px">DATE</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->history_taking_date}}</td>
                        </tr>
                        <tr>
                            <td>TRAUMA TYPE</td>
                            <td>:</td>
                            <td>{{unslugify($kasus->trauma_type)}} @if($kasus->trauma_type == 'other') - {{$kasus->trauma_type_others}} @endif</td>
                        </tr>
                        <tr>
                            <td>ETIOLOGY</td>
                            <td>:</td>
                            <td>{{unslugify($kasus->etiology)}}</td>
                        </tr>
                    </table>

                    <h6 style="font-weight: 600" class="text-primary">Main Complaint</h6>

                    <table class="table table-no-border">
                        <tr>
                            <td style="width: 150px">PAIN LOCATION</td>
                            <td style="width: 20px">:</td>
                            <td>{{unslugify($kasus->main_complaint_pain_location)}} @if($kasus->main_complaint_pain_location == 'other')  - {{$kasus->main_complaint_pain_location_others}} @endif</td>
                        </tr>
                    </table>

                    @include('kasus.components-form.radio-button-yes-no-view',
                    ['default'=> $kasus->main_complaint_haematuria, 'label'=>'Haematuria '])
                    @include('kasus.components-form.radio-button-yes-no-view',
                    ['default'=> $kasus->main_complaint_meatal_bleeding, 'label'=>'Meatal Bleeding '])
                    @include('kasus.components-form.radio-button-yes-no-view',
                    ['default'=> $kasus->main_complaint_urinary_retention, 'label'=>'Urinary Retention '])
                    @include('kasus.components-form.radio-button-yes-no-view',
                    ['default'=> $kasus->main_complaint_shock, 'label'=>'Shock '])


                    <h6 class="display-4">Physical Examination</h6>

                    <table class="table table-no-border table-uppercase-first">
                        <tr>
                            <td style="width: 150px">Glasgow Coma Scale</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->physical_examination_gcs}}</td>
                        </tr>
                        <tr>
                            <td>Shock History</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_shock_history}}</td>
                        </tr>
                        <tr>
                            <td>Resusitation Respond</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_resusitation_respond}}</td>
                        </tr>
                        <tr>
                            <td>Peritonitis</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_peritonitis}}</td>
                        </tr>
                    </table>

                    <h6 style="font-weight: 600" class="text-primary">Urinary Tract & External Genitalia</h6>


                    <table class="table table-no-border table-uppercase-first">
                        <tr>
                            <td style="width: 150px">Kidney</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->physical_examination_kidney}}</td>
                        </tr>
                        <tr>
                            <td>Ureter</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_ureter}}</td>
                        </tr>
                        <tr>
                            <td>Bladder</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_bladder}}</td>
                        </tr>
                        <tr>
                            <td>Penile</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_penile}}</td>
                        </tr>
                        <tr>
                            <td>Urethra</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_urethra}}</td>
                        </tr>
                        <tr>
                            <td>Scrotum</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_scrotum}}</td>
                        </tr>
                        <tr>
                            <td>Perianal</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_perianal}}</td>
                        </tr>
                    </table>

                    <h4 class="display-4">INTRA OPERATIVE</h4>

                    <table class="table table-no-border table-uppercase-first">
                        <tr>
                            <td style="width: 150px">Indication</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->ops_indication}}</td>
                        </tr>
                        <tr>
                            <td>Classification</td>
                            <td>:</td>
                            <td>{{unslugify($kasus->ops_classification)}}</td>
                        </tr>
                        <tr>
                            <td>Surgery Type</td>
                            <td>:</td>
                            <td>{{$kasus->ops_surgery_type}}</td>
                        </tr>
                        <tr>
                            <td>Operator</td>
                            <td>:</td>
                            <td>{{$kasus->ops_operator}}</td>
                        </tr>
                        <tr>
                            <td>Operating Time</td>
                            <td>:</td>
                            <td>{{$kasus->physical_examination_urethra}} Minutes</td>
                        </tr>
                    </table>

                    <hr>

                    <h6 style="font-weight: 600" class="text-primary">Intraoperative Consultation</h6>



                    <table class="table table-no-border table-uppercase-first">
                        <tr>
                            <td style="width: 150px">Action</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->intraops_consult_action}}</td>
                        </tr>
                        <tr>
                            <td>Operator</td>
                            <td>:</td>
                            <td>{{$kasus->intraops_consult_operator}}</td>
                        </tr>
                    </table>

                    <hr>


                    <table class="table table-no-border table-uppercase-first">
                        <tr>
                            <td style="width: 150px">Intraoperative Finding</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->intraops_finding}}</td>
                        </tr>
                        <tr>
                            <td>Bleeding (cc)</td>
                            <td>:</td>
                            <td>{{$kasus->intraops_bleeding}} cc</td>
                        </tr>
                        <tr>
                            <td>Blood Transfusion</td>
                            <td>:</td>
                            <td>{{$kasus->intraops_blood_transfusion}} cc</td>
                        </tr>
                        <tr>
                            <td>Surgical Technique</td>
                            <td>:</td>
                            <td>{{unslugify($kasus->intraops_surgical_technique)}} cc</td>
                        </tr>
                    </table>

                    <hr>

                    <h4 class="display-4">POST OPERATIVE</h4>

                    @include('kasus.components-form.radio-button-yes-no-view',
                    ['default'=> $kasus->postops_death, 'label'=>'Death '])


                    <table class="table table-no-border table-uppercase-first">
                        @if($kasus->postops_death)
                        <tr>
                            <td style="width: 150px">Cause of Death</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->postops_death_cause}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td style="width: 150px">Intensive Care Unit (Day)</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->postops_icu_days}} days</td>
                        </tr>
                    </table>


                    @include('kasus.components-form.radio-button-yes-no-view',
                    ['default'=> $kasus->postops_reoperation, 'label'=>'Re-Operation '])


                    @if($kasus->postops_reoperation)
                    <table class="table table-no-border table-uppercase-first">
                        <tr>
                            <td style="width: 150px">Cause</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->postops_reoperation_cause}}</td>
                        </tr>
                        <tr>
                            <td style="width: 150px">Days</td>
                            <td style="width: 20px">:</td>
                            <td>{{$kasus->postops_reoperation_days}} days</td>
                        </tr>
                    </table>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@include('kasus.components-view.delete-case-form')
@endsection

@section('js')
@include('layouts.components-js.delete-confirmation-swal')
@endsection
