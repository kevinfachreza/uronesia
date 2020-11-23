@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Trauma Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/trauma')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.layouts.form.pre-ops')
                @include('kasus.layouts.form.pre-ops-radiology')
                @include('kasus.layouts.form.pre-ops-lab-sm')
                <div class="row">
                    <div class="col-12 mt-2">
                        <hr style="width: 100%">
                        <h6 class="display-4">History Taking</h6>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Date</label>
                            <input type="date" class="form-control" name="history_taking_date" value="{{$kasus->history_taking_date}}">
                        </div>
                    </div>

                    @include('kasus.components-form.select',['default'=> $kasus->trauma_type, 'label'=>'Trauma Type','name'=>'trauma_type','options' => ['Blunt','Penetrating','Gunshot','Other']])

                    <div class="col-12" style="display: none">
                        <div class="form-group">
                            <label class="label">Other Trauma Type</label>
                            <input type="text" class="form-control" name="trauma_type_others"  value="{{$kasus->trauma_type_others}}">
                        </div>
                    </div>

                    @include('kasus.components-form.select',['default'=> $kasus->etiology, 'label'=>'Etiology','name'=>'etiology','options' => ['Traffic Accident','Fall','Sport','Fight','Intraoperative Finding']])

                    <div class="col-12">
                        <h6 style="font-weight: 600" class="text-primary">Main Complaint</h6>
                    </div>

                    @include('kasus.components-form.select',['default'=> $kasus->main_complaint_pain_location, 'label'=>'Pain Location','name'=>'main_complaint_pain_location','options' => ['Abdomen','Right Flank','Left Flank','External Genitalia','Other']])

                    <div class="col-12" style="display: none">
                        <div class="form-group">
                            <label class="label">Other Pain Location</label>
                            <input type="text" class="form-control" name="main_complaint_pain_location_others" value="{{$kasus->main_complaint_pain_location_others}}">
                        </div>
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->main_complaint_haematuria, 'label'=>'Haematuria','name'=>'main_complaint_haematuria'])
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->main_complaint_meatal_bleeding, 'label'=>'Meatal Bleeding','name'=>'main_complaint_meatal_bleeding'])
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->main_complaint_urinary_retention, 'label'=>'Urinary Retention','name'=>'main_complaint_urinary_retention'])
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->main_complaint_shock, 'label'=>'Shock','name'=>'main_complaint_shock'])
                    </div>
                </div>

                <div class="row">


                    <div class="col-12 mt-2">
                        <hr style="width: 100%">
                        <h6 class="display-4">Physical Examination</h6>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Glasgow Coma Scale</label>
                            <input type="text" class="form-control" name="physical_examination_gcs" value="{{$kasus->physical_examination_gcs}}" >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Shock History</label>
                            <input type="text" class="form-control" name="physical_examination_shock_history" value="{{$kasus->physical_examination_shock_history}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Resusitation Respond</label>
                            <input type="text" class="form-control" name="physical_examination_resusitation_respond" value="{{$kasus->physical_examination_resusitation_respond}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Peritonitis</label>
                            <input type="text" class="form-control" name="physical_examination_peritonitis" value="{{$kasus->physical_examination_peritonitis}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 style="font-weight: 600" class="text-primary">Urinary Tract & External Genitalia</h6>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Kidney</label>
                            <input type="text" class="form-control" name="physical_examination_kidney" value="{{$kasus->physical_examination_kidney}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Ureter</label>
                            <input type="text" class="form-control" name="physical_examination_ureter" value="{{$kasus->physical_examination_ureter}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Bladder</label>
                            <input type="text" class="form-control" name="physical_examination_bladder" value="{{$kasus->physical_examination_bladder}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Penile</label>
                            <input type="text" class="form-control" name="physical_examination_penile" value="{{$kasus->physical_examination_penile}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Urethra</label>
                            <input type="text" class="form-control" name="physical_examination_urethra" value="{{$kasus->physical_examination_urethra}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Scrotum</label>
                            <input type="text" class="form-control" name="physical_examination_scrotum" value="{{$kasus->physical_examination_scrotum}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Perianal</label>
                            <input type="text" class="form-control" name="physical_examination_perianal" value="{{$kasus->physical_examination_perianal}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-2">
                        <hr style="width: 100%">
                        <h4 class="display-4">INTRA OPERATION</h4>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Indication</label>
                            <input type="text" class="form-control" name="ops_indication" value="{{$kasus->ops_indication}}">
                        </div>
                    </div>
                    @include('kasus.components-form.select',['default'=> $kasus->ops_classification, 'label'=>'Classification','name'=>'ops_classification','options' => ['Cito','Elective']])
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Surgery Type</label>
                            <input type="text" class="form-control" name="ops_surgery_type" value="{{$kasus->ops_surgery_type}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Operator</label>
                            <input type="text" class="form-control" name="ops_operator" value="{{$kasus->ops_operator}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Operating Time (Minutes)</label>
                            <input type="number" class="form-control" name="ops_time" value="{{$kasus->ops_time}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 style="font-weight: 600" class="text-primary">Intraoperative Consultation</h6>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Action</label>
                            <input type="text" class="form-control" name="intraops_consult_action" value="{{$kasus->intraops_consult_action}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Operator</label>
                            <input type="text" class="form-control" name="intraops_consult_operator" value="{{$kasus->intraops_consult_operator}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Intraoperative Finding</label>
                            <input type="text" class="form-control" name="intraops_finding" value="{{$kasus->intraops_finding}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Bleeding (cc)</label>
                            <input type="number" class="form-control" name="intraops_bleeding" value="{{$kasus->intraops_bleeding}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Blood Transfusion</label>
                            <input type="text" class="form-control" name="intraops_blood_transfusion" value="{{$kasus->intraops_blood_transfusion}}">
                        </div>
                    </div>

                    @include('kasus.components-form.select',['default'=> $kasus->intraops_surgical_technique, 'label'=>'Surgical Technique','name'=>'intraops_surgical_technique','options' => ['Nefrostomy','DJ Stent','Ureter Cathete','Cystostomy']])
                </div>
                <div class="row">
                    <div class="col-12 mt-2">
                        <hr style="width: 100%">
                        <h4 class="display-4">POST OPERATION</h4>
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->postops_death, 'label'=>'Death','name'=>'postops_death'])
                    </div>
                    <div class="col-12"  style="display: none">
                        <div class="form-group">
                            <label class="label">Cause of Death</label>
                            <input type="text" class="form-control" name="postops_death_cause" value="{{$kasus->postops_death_cause}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Intensive Care Unit (Day)</label>
                            <input type="number" class="form-control" name="postops_icu_days" value="{{$kasus->postops_icu_days}}">
                        </div>
                    </div>
                    <div class="col-12">
                        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->postops_reoperation, 'label'=>'Re-Operation','name'=>'postops_reoperation'])
                    </div>
                    <div class="col-12" style="display: none">
                        <div class="form-group">
                            <label class="label">Re Operation Cause</label>
                            <input type="text" class="form-control" name="postops_reoperation_cause" value="{{$kasus->postops_reoperation_cause}}">
                        </div>
                    </div>
                    <div class="col-12" style="display: none">
                        <div class="form-group">
                            <label class="label">Re Operation Days</label>
                            <input type="number" class="form-control" name="postops_reoperation_days" value="{{$kasus->postops_reoperation_days}}">
                        </div>
                    </div>
                </div>
                <div class="row">
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
$('input[name=postops_death]').change(function(){
    changePostOpsDeath(value)
})
$('input[name=postops_reoperation]').change(function(){
    value = $(this).val();
    changePostOpsReoperation(value)
})

function changePostOpsDeath(value)
{
    if(value == 1) $('input[name=postops_death_cause]').parent().parent().show()
    else $('input[name=postops_death_cause]').parent().parent().hide()
}

function changePostOpsReoperation(value)
{
    if(value == 1) 
    {
        $('input[name=postops_reoperation_cause]').parent().parent().show()
        $('input[name=postops_reoperation_days]').parent().parent().show()
    }
    else 
    {
        $('input[name=postops_reoperation_cause]').parent().parent().hide()
        $('input[name=postops_reoperation_days]').parent().parent().hide()
    }
}
$('select[name=trauma_type]').change(function(){
    value = $(this).val();
    if(value == 'other') $('input[name=trauma_type_others]').parent().parent().show()
    else $('input[name=trauma_type_others]').parent().parent().hide()
})

$('select[name=main_complaint_pain_location]').change(function(){
    value = $(this).val();
    if(value == 'other') $('input[name=main_complaint_pain_location_others]').parent().parent().show()
    else $('input[name=main_complaint_pain_location_others]').parent().parent().hide()
})

$('#foto-klinis-radiology-add').click(function(){
    var file_input = `<div class="mt-2"><input type="file" name="file_radiology[]"></div>`
    $('#foto-klinis-radiology-container').append(file_input)
})



$('select[name=trauma_type]').trigger('change');
$('select[name=main_complaint_pain_location]').trigger('change');
changePostOpsDeath('{{$kasus->postops_death}}')
changePostOpsReoperation('{{$kasus->postops_reoperation}}')



</script>
@endsection
