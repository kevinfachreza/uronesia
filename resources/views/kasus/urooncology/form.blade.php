@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Uro-Oncology Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/urooncology')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.layouts.form.pre-ops')
                @include('kasus.urooncology.form-components.pre-anamnesis')
                @include('kasus.urooncology.form-components.pre-physical-exam')
                @include('kasus.urooncology.form-components.pre-lab')
                @include('kasus.urooncology.form-components.pre-radiology')
                @include('kasus.urooncology.form-components.intra-operative')
                @include('kasus.urooncology.form-components.post-operative')

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

@php $photo_slugs = ['radiology-pre-thorax','radiology-pre-bnoivp','radiology-pre-usg','radiology-pre-ct','radiology-pre-mri','radiology-pre-bone','radiology-pre-urethrocystocopy','radiology-post-thorax','radiology-post-bnoivp','radiology-post-usg','radiology-post-ct','radiology-post-mri','radiology-post-bone','radiology-post-urethrocystocopy','intra-operative-clinical','post-operative-clinical'] @endphp

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
    console.log(value)
    if(value == 1) $('input[name=post_operative__complication_action]').parent().parent().show()
    else $('input[name=post_operative__complication_action]').parent().parent().hide()
}



changePostOpsDeath('{{$kasus->operative_post->death ?? ''}}')
changePostOpsComplication('{{$kasus->operative_post->complication ?? ''}}')
changeAnamnesisHistoryUrineStone('{{$kasus->anamnesis->history_of_urinarytract_stone ?? ''}}')


</script>
@endsection
