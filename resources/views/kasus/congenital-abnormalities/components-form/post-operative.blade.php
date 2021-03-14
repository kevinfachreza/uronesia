<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">POST OPERATIVE</h1>
	</div>

	@php 
		$files_title[] = 'Clinical Picture';

		$files_names[] = 'post-operative-clinical'; 
	@endphp 

	@foreach($files_title as $index => $title)
		@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
	@endforeach

	<div class="col-12">
		<div class="form-group">
			<label class="label">Wound</label>
			<input type="text" class="form-control" name="post_operative__wound" value="{{$kasus->operative_post->wound ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Drain (cc)</label>
			<input type="text" class="form-control" name="post_operative__drain" value="{{$kasus->operative_post->drain ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Urethral Catheter (cc)</label>
			<input type="text" class="form-control" name="post_operative__urethral_cath" value="{{$kasus->operative_post->urethral_cath ?? ''}}">
		</div>
	</div>


	@php 
		$files_names = []; 
		$files_title = []; 
		
		$files_title[] = 'BNO Post Operative';

		$files_names[] = 'post-operative-bno'; 
	@endphp 

	@foreach($files_title as $index => $title)
		@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
	@endforeach
</div>


<div class="row my-2">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			<div class="col-12">
				<h5>Laboratory Result</h5>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">HB</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_hb" value="{{$kasus->penunjang_lab_post->lab_hb ?? ''}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">HT</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_ht" value="{{$kasus->penunjang_lab_post->lab_ht ?? ''}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">Leucocyte</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_leucocyte" value="{{$kasus->penunjang_lab_post->lab_leucocyte ?? ''}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">Trombocyte</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_trombocyte" value="{{$kasus->penunjang_lab_post->lab_trombocyte ?? ''}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">UR</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_ur" value="{{$kasus->penunjang_lab_post->lab_ur ?? ''}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">CR</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_cr" value="{{$kasus->penunjang_lab_post->lab_cr ?? ''}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">NA</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_na" value="{{$kasus->penunjang_lab_post->lab_na ?? ''}}">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label class="label">K</label>
					<input type="text" class="form-control" name="penunjang_lab_post__lab_k" value="{{$kasus->penunjang_lab_post->lab_k ?? ''}}">
				</div>
			</div>
			
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Bacteria</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_urine_cult_bacteria" value="{{$kasus->penunjang_lab_post->lab_urine_cult_bacteria ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Sensitive</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_urine_cult_sensitive" value="{{$kasus->penunjang_lab_post->lab_urine_cult_sensitive ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Resistance</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_urine_cult_resistance" value="{{$kasus->penunjang_lab_post->lab_urine_cult_resistance ?? ''}}">
                </div>
            </div>


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
				$files_title = [];
				$files_names = [];
				$files_title[] = 'USG';
				$files_title[] = 'BNO';
				$files_title[] = 'IVP';
				$files_title[] = 'CT';
				$files_title[] = 'MRI';
				$files_title[] = 'VCUG';

				$files_names[] = 'radiology-post-usg'; 
				$files_names[] = 'radiology-post-bno'; 
				$files_names[] = 'radiology-post-ivp'; 
				$files_names[] = 'radiology-post-ct'; 
				$files_names[] = 'radiology-post-mri'; 
				$files_names[] = 'radiology-post-vcug'; 
			@endphp 



			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
		</div>
	</div>
</div>


<div class="row">

	<div class="col-12">
		<div class="form-group">
			<label class="label">Renogram</label>
			<input type="text" class="form-control" name="post_operative__renogram" value="{{$kasus->operative_post->renogram ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->complication ?? '', 'label'=>'Complication','name'=>'post_operative__complication'])
	</div>
	<div class="col-12"  style="display: none">
		<div class="form-group">
			<label class="label">Action</label>
			<input type="text" class="form-control" name="post_operative__complication_action" value="{{$kasus->operative_post->complication_action ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->death ?? '', 'label'=>'Death','name'=>'post_operative__death'])
	</div>
	<div class="col-12"  style="display: none">
		<div class="form-group">
			<label class="label">Cause of Death</label>
			<input type="text" class="form-control" name="post_operative__death_cause" value="{{$kasus->operative_post->death_cause ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Next Plan</label>
			<input type="text" class="form-control" name="post_operative__next_plan" value="{{$kasus->operative_post->next_plan ?? ''}}">
		</div>
	</div>
</div>