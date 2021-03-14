<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">INTRA OPERATIVE</h1>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Operator</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Operator</label>
			<input type="text" class="form-control" name="intra_operative__operator" value="{{$kasus->operative_intra->operator ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Port</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->port_size ?? '','label'=>'Size','name'=>'intra_operative__port_size','options' => ['10','5','3']])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->port_number ?? '','label'=>'Number','name'=>'intra_operative__port_number','options' => ['1','2','3','4','5']])
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Operation Time</h6>
	</div>

	<div class="col-12">
		<div class="form-group">
			<label class="label">Porting</label>
			<input type="text" class="form-control" name="intra_operative__time_operation_porting" value="{{$kasus->operative_intra->time_operation_porting ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Operation</label>
			<input type="text" class="form-control" name="intra_operative__time" value="{{$kasus->operative_intra->time ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Total Time</label>
			<input type="text" class="form-control" name="intra_operative__time_operation_total" value="{{$kasus->operative_intra->time_operation_total ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Warm Ishemic Time</label>
			<input type="text" class="form-control" name="intra_operative__time_operation_ischaemic_time_warm_1" value="{{$kasus->operative_intra->time_operation_ischaemic_time_warm_1 ?? ''}}">
		</div>
	</div>
	<hr>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->operation_site ?? '','label'=>'Site','name'=>'intra_operative__operation_site','options' => ['Dx','Sin','Bil']])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->dj_stent ?? '','label'=>'DJ Stent','name'=>'intra_operative__dj_stent'])
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

	<div class="row files-upload">
		<div class="col-lg-12 col-md-12">
			<div class="row">
				<div class="col-12">
					<h5>Radiology Result</h5>
				</div>
				@php 
				$files_title[] = 'Intraoperative FInding';

				$files_names[] = 'intra-operative-finding'; 
				@endphp 

				@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
				@endforeach


			</div>
		</div>
	</div>
	
</div>
<hr>
<div class="row">
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Complication</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->complication ?? '','label'=>'Complication','name'=>'intra_operative__complication'])
	</div>
	<div class="col-12" style="display: none">
		<div class="form-group">
			<label class="label">Description</label>
			<input type="text" class="form-control" name="intra_operative__complication_desc" value="{{$kasus->operative_intra->complication_desc ?? ''}}">
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Failed Procedure</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->failed_procedure ?? '','label'=>'Complication','name'=>'intra_operative__failed_procedure'])
	</div>
	<div class="col-12" style="display: none">
		<div class="form-group">
			<label class="label">Cause</label>
			<input type="text" class="form-control" name="intra_operative__failed_procedure_cause" value="{{$kasus->operative_intra->failed_procedure_cause ?? ''}}">
		</div>
	</div>
	<div class="col-12" style="display: none">
		<div class="form-group">
			<label class="label">Open Conversion</label>
			<input type="text" class="form-control" name="intra_operative__failed_procedure_open_conversion" value="{{$kasus->operative_intra->failed_procedure_open_conversion ?? ''}}">
		</div>
	</div>
</div>