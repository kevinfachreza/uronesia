@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Uroginecology Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/uroginecology')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.uroginecology.components-form.pre-operative')
                @include('kasus.uroginecology.components-form.intra-operative')
                @include('kasus.uroginecology.components-form.post-operative')

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
$photo_slugs[] = 'radiology-pre-usg'; 
$photo_slugs[] = 'radiology-pre-bno'; 
$photo_slugs[] = 'radiology-pre-ivp'; 
$photo_slugs[] = 'radiology-pre-ct'; 
$photo_slugs[] = 'radiology-pre-mri'; 
$photo_slugs[] = 'post-ops-bno'; 
@endphp

@foreach($photo_slugs as $slug)
@php $slug_kebab = str_replace("-","_",$slug); @endphp
$('#foto-{{$slug}}-add').click(function(){
    var file_input = `<div class="mt-2"><input type="file" name="file__{{$slug_kebab}}[]"></div>`
    $('#foto-{{$slug}}-container').append(file_input)
})
@endforeach


</script>
@endsection
