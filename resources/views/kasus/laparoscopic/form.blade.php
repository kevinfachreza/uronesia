@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Laparoscopic Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/laparoscopic')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.layouts.form.pre-ops-2')
                @include('kasus.laparoscopic.form-components.pre-operative')
                @include('kasus.laparoscopic.form-components.intra-operative')
                @include('kasus.laparoscopic.form-components.post-operative')

                <div class="row mt-5">
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
$('input[name=anamnesis__history_of_urinarytract_stone]').change(function(){
    changeAnamnesisHistoryUrineStone(value)
})
function changeAnamnesisHistoryUrineStone(value)
{
    if(value == 1) $('input[name=anamnesis__history_of_urinarytract_stone_location]').parent().parent().show()
    else $('input[name=anamnesis__history_of_urinarytract_stone_location]').parent().parent().hide()
}

$('select[name=main_complaint_pain_location]').change(function(){
    value = $(this).val();
    if(value == 'other') $('input[name=main_complaint_pain_location_others]').parent().parent().show()
    else $('input[name=main_complaint_pain_location_others]').parent().parent().hide()
})



$('select[name=main_complaint_pain_location]').trigger('change');

@php $photo_slugs = ['radiology-pre-usg','radiology-pre-bno','radiology-pre-ivp','radiology-pre-ct','radiology-pre-mri','radiology-post-ct','radiology-post-mri','intra-operative-clinical','post-operative-bno','intra-operative-finding'] @endphp

@foreach($photo_slugs as $slug)
@php $slug_kebab = str_replace("-","_",$slug); @endphp
$('#foto-{{$slug}}-add').click(function(){
    var file_input = `<div class="mt-2"><input type="file" name="file__{{$slug_kebab}}[]"></div>`
    $('#foto-{{$slug}}-container').append(file_input)
})
@endforeach


$('input[name=post_operative__death]').change(function(){
    changePostOpsDeath(value)
})

function changePostOpsDeath(value)
{
    if(value == 1) $('input[name=post_operative__death_cause]').parent().parent().show()
    else $('input[name=post_operative__death_cause]').parent().parent().hide()
}

$('input[name=post_operative__complication]').change(function(){
    changePostOpsComplication(value)
})

function changePostOpsComplication(value)
{
    if(value == 1) 
    {
        $('input[name=post_operative__complication_action]').parent().parent().show()
        $('input[name=post_operative__complication_cause]').parent().parent().show()
    }
    else 
    {
        $('input[name=post_operative__complication_action]').parent().parent().hide()
        $('input[name=post_operative__complication_cause]').parent().parent().hide()
    }
}

$('input[name=intra_operative__complication]').change(function(){
    changeIntraOpsComplication(value)
})

function changeIntraOpsComplication(value)
{
    if(value == 1) $('input[name=intra_operative__complication_desc]').parent().parent().show()
    else $('input[name=intra_operative__complication_desc]').parent().parent().hide()
}

$('input[name=intra_operative__failed_procedure]').change(function(){
    changeIntraOpsFailedProcedure(value)
})

function changeIntraOpsFailedProcedure(value)
{
    if(value == 1) 
    {
        $('input[name=intra_operative__failed_procedure_cause]').parent().parent().show()
        $('input[name=intra_operative__failed_procedure_open_conversion]').parent().parent().show()
    }
    else 
    {
        $('input[name=intra_operative__failed_procedure_cause]').parent().parent().hide()
        $('input[name=intra_operative__failed_procedure_open_conversion]').parent().parent().hide()
    }
}



changePostOpsDeath('{{$kasus->operative_post->death ?? ''}}')
changePostOpsComplication('{{$kasus->operative_post->complication ?? ''}}')
changeAnamnesisHistoryUrineStone('{{$kasus->anamnesis->history_of_urinarytract_stone ?? ''}}')
changeIntraOpsComplication('{{$kasus->operative_intra->complication ?? ''}}')
changeIntraOpsFailedProcedure('{{$kasus->operative_intra->failed_procedure ?? ''}}')



$('input[name=post_operative__analgetics_iv]').change(function(){
    changePostOpsAnalgeticsIV(value)
})
$('input[name=post_operative__analgetics_oral]').change(function(){
    changePostOpsAnalgeticsOral(value)
})

function changePostOpsAnalgeticsIV(value)
{
    if(value == 1)
        $('input[name=post_operative__analgetics_iv_drug]').parent().show()
    else
        $('input[name=post_operative__analgetics_iv_drug]').parent().hide()
}

function changePostOpsAnalgeticsOral(value)
{
    if(value == 1)
        $('input[name=post_operative__analgetics_oral_drug]').parent().show()
    else
        $('input[name=post_operative__analgetics_oral_drug]').parent().hide()
}


changePostOpsAnalgeticsIV('{{$kasus->operative_post->analgetics_iv ?? ''}}')
changePostOpsAnalgeticsOral('{{$kasus->operative_post->analgetics_oral ?? ''}}')


</script>
@endsection
