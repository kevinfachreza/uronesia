<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">POST OPERATIVE</h1>
	</div>
	<div class="col-12">

		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->haematoma ?? '','label'=>'Haematoma','name'=>'post_operative__haematoma'])

		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->oedema_scrotum ?? '','label'=>'Oedema Scrotum','name'=>'post_operative__oedema_scrotum'])

		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->wound_dehicense ?? '','label'=>'Wound Dehicense','name'=>'post_operative__wound_dehicense'])
	</div>
</div>


<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			@php 
				$files_title[] = 'Clinical Picture';

				$files_names[] = 'post-ops-clinical-picture'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>