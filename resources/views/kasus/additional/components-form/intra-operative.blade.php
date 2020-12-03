<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">INTRA OPERATIVE</h1>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Operator</label>
			<input type="text" class="form-control" name="intra_operative__operator" value="{{$kasus->operative_intra->operator ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Surgical Technique</label>
			<input type="text" class="form-control" name="intra_operative__surgical_technique" value="{{$kasus->operative_intra->surgical_technique ?? ''}}">
		</div>
	</div>
</div>


<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			@php 
				$files_title[] = 'Clinical Picture Pre Operative';
				$files_title[] = 'Clinical Picture Intra Operative';
				$files_title[] = 'Clinical Picture Post Operative';

				$files_names[] = 'clinical-picture-pre-ops'; 
				$files_names[] = 'clinical-picture-intra-ops'; 
				$files_names[] = 'clinical-picture-post-ops'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>