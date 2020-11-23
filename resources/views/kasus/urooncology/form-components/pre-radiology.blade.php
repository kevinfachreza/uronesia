<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			<div class="col-12">
				<h5>Radiology Result</h5>
			</div>
			@php 
				$files_title[] = 'Thorax';
				$files_title[] = 'BNO/IVP';
				$files_title[] = 'USG';
				$files_title[] = 'CT';
				$files_title[] = 'MRI';
				$files_title[] = 'Bone Scan';
				$files_title[] = 'Urethrocystoscopy';

				$files_names[] = 'radiology-pre-thorax'; 
				$files_names[] = 'radiology-pre-bnoivp'; 
				$files_names[] = 'radiology-pre-usg'; 
				$files_names[] = 'radiology-pre-ct'; 
				$files_names[] = 'radiology-pre-mri'; 
				$files_names[] = 'radiology-pre-bone'; 
				$files_names[] = 'radiology-pre-urethrocystocopy';
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>