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
			<label class="label">Time (Minutes)</label>
			<input type="number" class="form-control" name="intra_operative__time" value="{{$kasus->operative_intra->time ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Blood Loss (cc) </label>
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
		<div class="form-group">
			<label class="label">Urethral Cath Position</label>
			<input type="text" class="form-control" name="intra_operative__urinary_diversion_urethral_cath_pos" value="{{$kasus->operative_intra->urinary_diversion_urethral_cath_pos ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Urethral Cath Size</label>
			<input type="text" class="form-control" name="intra_operative__urinary_diversion_urethral_cath_size" value="{{$kasus->operative_intra->urinary_diversion_urethral_cath_size ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Others</label>
			<input type="text" class="form-control" name="intra_operative__urinary_diversion_other" value="{{$kasus->operative_intra->urinary_diversion_other ?? ''}}">
		</div>
	</div>
	@php 
		$files_title[] = 'Clinical Picture';

		$files_names[] = 'intra-operative-clinical'; 
	@endphp 

	@foreach($files_title as $index => $title)
		@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
	@endforeach

	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Other Treatment</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Radiotherapy</label>
			<input type="text" class="form-control" name="intra_operative__treatment_radiotherapy" value="{{$kasus->operative_intra->treatment_radiotherapy ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Chemotherapy</label>
			<input type="text" class="form-control" name="intra_operative__treatment_chemotherapy" value="{{$kasus->operative_intra->treatment_chemotherapy ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Hormonal</label>
			<input type="text" class="form-control" name="intra_operative__treatment_hormonal" value="{{$kasus->operative_intra->treatment_hormonal ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Others</label>
			<input type="text" class="form-control" name="intra_operative__treatment_others" value="{{$kasus->operative_intra->treatment_others ?? ''}}">
		</div>
	</div>
</div>