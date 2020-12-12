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
		<h5>Surgical Technique</h5>

		<div class="form-group">
			@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_primary_closure ?? '','label'=>'Primary Closure','name'=>'intra_operative__surgical_technique_primary_closure'])
		</div>

		<h6 class="text-primary">Graft</h6>
		
		<div class="form-group">
			@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_graft_stsg ?? '','label'=>'STSG','name'=>'intra_operative__surgical_technique_graft_stsg'])
		</div>
		<div class="form-group">
			@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_graft_ftsg ?? '','label'=>'FTSG','name'=>'intra_operative__surgical_technique_graft_ftsg'])
		</div>

		<h6 class="text-primary">Stage</h6>
		
			@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_one_stage ?? '','label'=>'One Stage','name'=>'intra_operative__surgical_technique_one_stage'])

			@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_two_stage ?? '','label'=>'Two Stages','name'=>'intra_operative__surgical_technique_two_stage'])

			@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_second_stage ?? '','label'=>'Second Stage','name'=>'intra_operative__surgical_technique_second_stage'])

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