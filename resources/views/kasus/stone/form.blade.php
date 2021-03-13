@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Stone Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/stone')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.stone.components-form.pre-operative')
                @include('kasus.stone.components-form.intra-operative')
                @include('kasus.stone.components-form.post-operative')

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
@php 
$photo_slugs = [];
$photo_slugs[] = 'clinical-picture-pre-ops'; 
$photo_slugs[] = 'clinical-picture-intra-ops'; 
$photo_slugs[] = 'clinical-picture-post-ops'; 
$photo_slugs[] = 'fluoroscopy-intra'; 
$photo_slugs[] = 'fluoroscopy-post'; 
$photo_slugs[] = 'radiology-pre-usg'; 
$photo_slugs[] = 'radiology-pre-bno'; 
$photo_slugs[] = 'radiology-pre-ivp'; 
$photo_slugs[] = 'radiology-pre-ct'; 
$photo_slugs[] = 'radiology-pre-mri'; 
$photo_slugs[] = 'post-ops-bno'; 
$photo_slugs[] = 'rest-stone-clinical-picture'; 
@endphp

@foreach($photo_slugs as $slug)
@php $slug_kebab = str_replace("-","_",$slug); @endphp
$('#foto-{{$slug}}-add').click(function(){
    var file_input = `<div class="mt-2"><input type="file" name="file__{{$slug_kebab}}[]"></div>`
    $('#foto-{{$slug}}-container').append(file_input)
})
@endforeach


$('input[name=intra_operative__complication]').change(function(){
    changeIntraOpsComplication(value)
})

function changeIntraOpsComplication(value)
{
    if(value == 1) 
    {
        $('.complication-intra-form').show()
    }
    else 
    {
        $('.complication-intra-form').hide()
    }
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


$('input[name=intra_operative__rest_stone_is]').change(function(){
    changeIntraOpsRestStone(value)
})

function changeIntraOpsRestStone(value)
{
    if(value == 1) 
    {
        $('.rest-stone-intra-form').show()
    }
    else 
    {
        $('.rest-stone-intra-form').hide()
    }
}


$('input[name=intra_operative__fluoroscopy_is]').change(function(){
    changeIntraOpsFluoroscopy(value)
})

function changeIntraOpsFluoroscopy(value)
{
    if(value == 1) 
    {
        $('.fluoroscopy-intra-form').show()
    }
    else 
    {
        $('.fluoroscopy-intra-form').hide()
    }
}



changeIntraOpsFluoroscopy('{{$kasus->operative_intra->fluoroscopy_is ?? ''}}')
changeIntraOpsRestStone('{{$kasus->operative_intra->rest_stone_is ?? ''}}')
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
