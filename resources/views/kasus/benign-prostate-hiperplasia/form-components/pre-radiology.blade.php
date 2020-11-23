<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			<div class="col-12">
				<h5>Radiology Result</h5>
			</div>
			@php 
				$files_title[] = 'USG Transrectal';
				$files_title[] = 'IVP';
				$files_title[] = 'Cystography';
				$files_title[] = 'CT';
				$files_title[] = 'MRI';

				$files_names[] = 'radiology-pre-usg-transrectal'; 
				$files_names[] = 'radiology-pre-ivp'; 
				$files_names[] = 'radiology-pre-cystography'; 
				$files_names[] = 'radiology-pre-ct'; 
				$files_names[] = 'radiology-pre-mri'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>