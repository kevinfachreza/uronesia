@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Male Infertility Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/male-infertility')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.male-infertility.components-form.pre-operative')
                @include('kasus.male-infertility.components-form.intra-operative')
                @include('kasus.male-infertility.components-form.post-operative')

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
$photo_slugs[] = 'intra-clinical'; 
$photo_slugs[] = 'imaging-testicle-usg'; 
$photo_slugs[] = 'imaging-transrectal-usg'; 
$photo_slugs[] = 'imaging-other'; 
@endphp

@foreach($photo_slugs as $slug)
@php $slug_kebab = str_replace("-","_",$slug); @endphp
$('#foto-{{$slug}}-add').click(function(){
    var file_input = `<div class="mt-2"><input type="file" name="file__{{$slug_kebab}}[]"></div>`
    $('#foto-{{$slug}}-container').append(file_input)
})
@endforeach


$('input[name=marital_status]').change(function(){
    changeMaritalStatus(value)
})

function changeMaritalStatus(value)
{
    if(value == 1) 
    {
        $('.marital-status-married').show()
    }
    else 
    {
        $('.marital-status-married').hide()
    }
}


changeMaritalStatus('{{$kasus->marital_status ?? ''}}')




$('input[name=intra_operative__non_invasive_empiric]').change(function(){
    changeIntraOpsNonInvasiveEmpiric(value)
})
$('input[name=intra_operative__non_invasive_hormonal]').change(function(){
    changeIntraOpsNonInvasiveHormonal(value)
})

function changeIntraOpsNonInvasiveEmpiric(value)
{
    if(value == 1)
        $('input[name=intra_operative__non_invasive_empiric_drug_name]').parent().show()
    else
        $('input[name=intra_operative__non_invasive_empiric_drug_name]').parent().hide()
}

function changeIntraOpsNonInvasiveHormonal(value)
{
    if(value == 1)
        $('input[name=intra_operative__non_invasive_hormonal_drug_name]').parent().show()
    else
        $('input[name=intra_operative__non_invasive_hormonal_drug_name]').parent().hide()
}


changeIntraOpsNonInvasiveEmpiric('{{$kasus->operative_intra->non_invasive_empiric ?? ''}}')
changeIntraOpsNonInvasiveHormonal('{{$kasus->operative_intra->non_invasive_hormonal ?? ''}}')


</script>
@endsection
