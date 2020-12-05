<div class="row mt-2">
	<div class="col-12">
		<div class="form-group">
			<label class="label">Chromosomal Analysis</label>
			<input type="text" class="form-control" name="pre_operative__chromosomal_analysis" value="{{$kasus->operative_pre->chromosomal_analysis ?? ''}}">
		</div>
	</div>
</div>


<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			<div class="col-12">
				<h5>Radiology Result</h5>
			</div>
			@php 
				$files_title[] = 'USG';
				$files_title[] = 'IVP';
				$files_title[] = 'CT';
				$files_title[] = 'MRI';
				$files_title[] = 'VCUG';

				$files_names[] = 'radiology-pre-usg'; 
				$files_names[] = 'radiology-pre-ivp'; 
				$files_names[] = 'radiology-pre-ct'; 
				$files_names[] = 'radiology-pre-mri'; 
				$files_names[] = 'radiology-pre-vcug'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>

<div class="row mt-2">
	<div class="col-12">
		<div class="form-group">
			<label class="label">Renogram</label>
			<input type="text" class="form-control" name="pre_operative__renogram" value="{{$kasus->operative_pre->renogram ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Final Diagnosis</label>
			<input type="text" class="form-control" name="pre_operative__final_diagnosis" value="{{$kasus->operative_pre->final_diagnosis ?? ''}}">
		</div>
	</div>
</div>
