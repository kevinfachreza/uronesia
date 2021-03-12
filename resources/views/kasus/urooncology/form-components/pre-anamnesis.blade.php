<div class="row">
	<div class="col-12">
		<h5>Anamnesis</h5>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Main Complaint</label>
			<input type="text" class="form-control" name="anamnesis__main_complaint" value="{{$kasus->anamnesis->main_complaint ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Since</label>
			<input type="text" class="form-control" name="anamnesis__main_complaint_since" value="{{$kasus->anamnesis->main_complaint_since ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->anamnesis->history_of_urinarytract_stone  ?? '', 'label'=>'History Of Urinary Tract Stone','name'=>'anamnesis__history_of_urinarytract_stone'])
	</div>
	<div class="col-12" style="display: none">
		<div class="form-group">
			<label class="label">Location of Urinary Tract Stone</label>
			<input type="text" class="form-control" name="anamnesis__history_of_urinarytract_stone_location" value="{{$kasus->anamnesis->history_of_urinarytract_stone_location ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">History Of Urology Surgery</label>
			<input type="text" class="form-control" name="anamnesis__history_of_urology_surgery" value="{{$kasus->anamnesis->history_of_urology_surgery ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Karnofsky</label>
			<input type="text" class="form-control" name="anamnesis__karnofsky" value="{{$kasus->anamnesis->karnofsky ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">IIEF-5</label>
			<input type="text" class="form-control" name="anamnesis__iief5" value="{{$kasus->anamnesis->iief5 ?? ''}}">
		</div>
	</div>
</div>