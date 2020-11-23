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
			<label class="label">Prostate Weight</label>
			<input type="text" class="form-control" name="intra_operative__prostate_weight" value="{{$kasus->operative_intra->prostate_weight ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Blood Transfusion (Kolf)</label>
			<input type="text" class="form-control" name="intra_operative__blood_transfusion" value="{{$kasus->operative_intra->blood_transfusion ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Difficulty</label>
			<input type="text" class="form-control" name="intra_operative__difficulty" value="{{$kasus->operative_intra->difficulty ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Other Surgery</label>
			<input type="text" class="form-control" name="intra_operative__surgery_other" value="{{$kasus->operative_intra->surgery_other ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Catheter Size</label>
			<input type="text" class="form-control" name="intra_operative__cath_size" value="{{$kasus->operative_intra->cath_size ?? ''}}">
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