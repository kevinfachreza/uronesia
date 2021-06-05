@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Congenital Abnormalities Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/congenital-abnormalities')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.congenital-abnormalities.components-form.pre-operative')
                @include('kasus.congenital-abnormalities.components-form.pre-operative-undescended-testes')
                @include('kasus.congenital-abnormalities.components-form.pre-operative-bladder-extrophy')
                @include('kasus.congenital-abnormalities.components-form.pre-operative-child-hydronephrosis')
                @include('kasus.congenital-abnormalities.components-form.pre-operative-hypospadia-new')
                @include('kasus.congenital-abnormalities.components-form.pre-operative-lab')
                @include('kasus.congenital-abnormalities.components-form.pre-operative-2')
                @include('kasus.congenital-abnormalities.components-form.intra-operative')
                @include('kasus.congenital-abnormalities.components-form.post-operative')


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



@php 
$photo_slugs[] = 'radiology-post-usg'; 
$photo_slugs[] = 'radiology-post-bno'; 
$photo_slugs[] = 'radiology-post-ivp'; 
$photo_slugs[] = 'radiology-post-ct'; 
$photo_slugs[] = 'radiology-post-mri'; 
$photo_slugs[] = 'radiology-post-vcug'; 
$photo_slugs[] = 'radiology-pre-usg'; 
$photo_slugs[] = 'radiology-pre-bno'; 
$photo_slugs[] = 'radiology-pre-ivp'; 
$photo_slugs[] = 'radiology-pre-ct'; 
$photo_slugs[] = 'radiology-pre-mri'; 
$photo_slugs[] = 'radiology-pre-vcug'; 
$photo_slugs[] = 'intra-clinical-picture'; 
$photo_slugs[] = 'post-operative-clinical'; 
$photo_slugs[] = 'post-operative-bno'; 
@endphp

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


$('.btn-toggle-show').click(function(){
    var body = $(this).parent().parent().find('.card-body')
    var value = body.hasClass('d-none')

    if(value) 
    {
        body.removeClass('d-none')
        $(this).html('Hide');
    }
    else 
    {
        body.addClass('d-none')
        $(this).html('Show');
    }
})

</script>
@endsection
