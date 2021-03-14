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
			<label class="label">Operation Date</label>
			<input type="date" class="form-control" name="intra_operative__operation_date" value="{{$kasus->operative_intra->operation_date ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Surgical Technique</label>
			<input type="text" class="form-control" name="intra_operative__surgical_technique" value="{{$kasus->operative_intra->surgical_technique ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Duration (Minutes)</label>
			<input type="number" class="form-control" name="intra_operative__time" value="{{$kasus->operative_intra->time ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Blood Loss (cc)</label>
			<input type="text" class="form-control" name="intra_operative__blood_loss" value="{{$kasus->operative_intra->blood_loss ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Blood Transfusion (Kolf)</label>
			<input type="text" class="form-control" name="intra_operative__blood_transfusion" value="{{$kasus->operative_intra->blood_transfusion ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Urinary Diversion</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->urinary_diversion_nephrostomy_pos ?? '','label'=>'Nephrostomy Position','name'=>'intra_operative__urinary_diversion_nephrostomy_pos','options' => ['Right','Left','Both']])
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Nephrostomy Size</label>
			<input type="text" class="form-control" name="intra_operative__urinary_diversion_nephrostomy_size" value="{{$kasus->operative_intra->urinary_diversion_nephrostomy_size ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->urinary_diversion_dj_stent_pos ?? '','label'=>'DJ Stent Position','name'=>'intra_operative__urinary_diversion_dj_stent_pos','options' => ['Right','Left','Both']])
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">DJ Stent Size</label>
			<input type="text" class="form-control" name="intra_operative__urinary_diversion_dj_stent_size" value="{{$kasus->operative_intra->urinary_diversion_dj_stent_size ?? ''}}">
		</div>
	</div>
	
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->urinary_diversion_ureter_cath_pos ?? '','label'=>'Ureter Catheter Position','name'=>'intra_operative__urinary_diversion_ureter_cath_pos','options' => ['Right','Left','Both']])
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Ureter Catheter Size</label>
			<input type="text" class="form-control" name="intra_operative__urinary_diversion_ureter_cath_size" value="{{$kasus->operative_intra->urinary_diversion_ureter_cath_size ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->cystostomy_desc ?? '','label'=>'Premature','name'=>'intra_operative__cystostomy_desc'])
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Cystostomy Size</label>
			<input type="text" class="form-control" name="intra_operative__cystostomy_size" value="{{$kasus->operative_intra->cystostomy_size ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->urinary_diversion_urethral_cath_pos ?? '','label'=>'Urethral Cath','name'=>'intra_operative__urinary_diversion_urethral_cath_pos'])
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Urethral Cath Size</label>
			<input type="text" class="form-control" name="intra_operative__urinary_diversion_urethral_cath_size" value="{{$kasus->operative_intra->urinary_diversion_urethral_cath_size ?? ''}}">
		</div>
	</div>

</div>

<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			<div class="col-12">
				<h5></h5>
			</div>
			@php 
				$files_title[] = 'Clinical Picture';

				$files_names[] = 'intra-clinical-picture'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>