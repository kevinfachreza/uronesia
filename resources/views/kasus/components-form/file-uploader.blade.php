@php $slug_kebab = str_replace("-","_",$slug); @endphp
<div class="col-12">
	<h5>{{$title}}</h5>
	<input type="file" name="file__{{$slug_kebab}}[]">
	<div id="foto-{{$slug}}-container">
	</div>
	<button class="btn btn-info btn-sm mt-3"  type="button"  id="foto-{{$slug}}-add"><i class="fa fa-plus"></i> Add Photo</button>
</div>


@include('kasus.components-form.file-delete',['files'=>$kasus->penunjang ?? [],'slug'=>$slug_kebab])