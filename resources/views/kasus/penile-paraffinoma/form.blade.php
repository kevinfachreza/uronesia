@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Penile Paraffinoma Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/penile-paraffinoma')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.penile-paraffinoma.components-form.pre-operative')
                @include('kasus.penile-paraffinoma.components-form.intra-operative')
                @include('kasus.penile-paraffinoma.components-form.post-operative')

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
$photo_slugs = ['post-ops-clinical-picture'];
$photo_slugs[] = 'clinical-picture-pre-ops'; 
$photo_slugs[] = 'clinical-picture-intra-ops'; 
$photo_slugs[] = 'clinical-picture-post-ops'; 
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
