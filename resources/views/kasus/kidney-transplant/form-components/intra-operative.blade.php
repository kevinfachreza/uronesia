<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">INTRA OPERATIVE</h1>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Operator</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="intra_operative__operator_donor" value="{{$kasus->operative_intra->operator_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="intra_operative__operator_recipient" value="{{$kasus->operative_intra->operator_recipient ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<h5>Surgical Technique</h5>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Donor</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->donor_kidney ?? '','label'=>'Kidney','name'=>'intra_operative__donor_kidney','options' => ['Right','Left']])
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Open Transperitoneal</label>
			<input type="text" class="form-control" name="intra_operative__donor_open_transperitoneal" value="{{$kasus->operative_intra->donor_open_transperitoneal ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Open Extraperitoneal</label>
			<input type="text" class="form-control" name="intra_operative__donor_open_extraperitoneal" value="{{$kasus->operative_intra->donor_open_extraperitoneal ?? ''}}">
		</div>
	</div>

	<div class="col-6">
		<div class="form-group">
			<label class="label">Laparoscopic Transperitoneal</label>
			<input type="text" class="form-control" name="intra_operative__donor_laparoscopic_transperitoneal" value="{{$kasus->operative_intra->donor_laparoscopic_transperitoneal ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Laparoscopic Extraperitoneal</label>
			<input type="text" class="form-control" name="intra_operative__donor_laparoscopic_extraperitoneal" value="{{$kasus->operative_intra->donor_laparoscopic_extraperitoneal ?? ''}}">
		</div>
	</div>

	<div class="col-6">
		<div class="form-group">
			<label class="label">Robotic Transperitoneal</label>
			<input type="text" class="form-control" name="intra_operative__donor_robotic_transperitoneal" value="{{$kasus->operative_intra->donor_robotic_transperitoneal ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Robotic Extraperitoneal</label>
			<input type="text" class="form-control" name="intra_operative__donor_robotic_extraperitoneal" value="{{$kasus->operative_intra->donor_robotic_extraperitoneal ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Recipient</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->recipient_kidney ?? '','label'=>'Kidney','name'=>'intra_operative__recipient_kidney','options' => ['Right','Left']])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->recipient_technique ?? '','label'=>'Technique','name'=>'intra_operative__recipient_technique','options' => ['Open','Laparoscopic','Robotic']])
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Iliaca Externa</label>
			<input type="text" class="form-control" name="intra_operative__recipient_iliaca_externa" value="{{$kasus->operative_intra->recipient_iliaca_externa ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Iliaca Interna</label>
			<input type="text" class="form-control" name="intra_operative__recipient_iliaca_interna" value="{{$kasus->operative_intra->recipient_iliaca_interna ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<div class="form-group">
			<label class="label">Anastomosis - End To End</label>
			<input type="text" class="form-control" name="intra_operative__recipient_anastomosis_end_to_end" value="{{$kasus->operative_intra->recipient_anastomosis_end_to_end ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Anastomosis - End To Side</label>
			<input type="text" class="form-control" name="intra_operative__recipient_anastomosis_end_to_side" value="{{$kasus->operative_intra->recipient_anastomosis_end_to_side ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Anastomosis - Side To Side</label>
			<input type="text" class="form-control" name="intra_operative__recipient_anastomosis_side_to_side" value="{{$kasus->operative_intra->recipient_anastomosis_side_to_side ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		<h5>Ureteral Implantation</h5>
	</div>

	<div class="col-12">
		<div class="form-group">
			<label class="label">Extravesical</label>
			<input type="text" class="form-control" name="intra_operative__urethral_implantation_extravesical" value="{{$kasus->operative_intra->urethral_implantation_extravesical ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Intravesical</label>
			<input type="text" class="form-control" name="intra_operative__urethral_implantation_intravesical" value="{{$kasus->operative_intra->urethral_implantation_intravesical ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Others</label>
			<input type="text" class="form-control" name="intra_operative__urethral_implantation_others" value="{{$kasus->operative_intra->urethral_implantation_others ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<h5>Time Operation</h5>
	</div>

	<div class="col-12">
		<div class="form-group">
			<label class="label">Ischaemic Time - Warm 1</label>
			<input type="text" class="form-control" name="intra_operative__time_operation_ischaemic_time_warm_1" value="{{$kasus->operative_intra->time_operation_ischaemic_time_warm_1 ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Ischaemic Time - Cold</label>
			<input type="text" class="form-control" name="intra_operative__time_operation_ischaemic_time_cold" value="{{$kasus->operative_intra->time_operation_ischaemic_time_cold ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Ischaemic Time - Warm 2</label>
			<input type="text" class="form-control" name="intra_operative__time_operation_ischaemic_time_warm_2" value="{{$kasus->operative_intra->time_operation_ischaemic_time_warm_2 ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Total Time</label>
			<input type="text" class="form-control" name="intra_operative__time_operation_total" value="{{$kasus->operative_intra->time_operation_total ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<h5>Solution</h5>
	</div>

	<div class="col-6">
		<div class="form-group">
			<label class="label">Immersed</label>
			<input type="text" class="form-control" name="intra_operative__solution_immersed" value="{{$kasus->operative_intra->solution_immersed ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Flushed</label>
			<input type="text" class="form-control" name="intra_operative__solution_flushed" value="{{$kasus->operative_intra->solution_flushed ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<div class="form-group">
			<label class="label">Size DJ Stent</label>
			<input type="text" class="form-control" name="intra_operative__dj_stent_size" value="{{$kasus->operative_intra->dj_stent_size ?? ''}}">
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





	@php 
		$files_title[] = 'Clinical Picture';

		$files_names[] = 'intra-operative-clinical'; 
	@endphp 

	@foreach($files_title as $index => $title)
		@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
	@endforeach
	
</div>