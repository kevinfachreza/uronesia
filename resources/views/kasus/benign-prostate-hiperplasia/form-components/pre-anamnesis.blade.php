<div class="row">
	<div class="col-12">
		<h5>Anamnesis</h5>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Prostatismus</label>
			<input type="text" class="form-control" name="anamnesis__prostatismus" value="{{$kasus->anamnesis->prostatismus ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Haematuria</label>
			<input type="text" class="form-control" name="anamnesis__haematuria" value="{{$kasus->anamnesis->haematuria ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">UTI Symptoms</label>
			<input type="text" class="form-control" name="anamnesis__uti_symptoms" value="{{$kasus->anamnesis->uti_symptoms ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Urinary Retention</label>
			<input type="text" class="form-control" name="anamnesis__urinary_retention" value="{{$kasus->anamnesis->urinary_retention ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">History Of Prostate Surgery</label>
			<input type="text" class="form-control" name="anamnesis__history_of_prostate_surgery" value="{{$kasus->anamnesis->history_of_prostate_surgery ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">History Of Vesicolithiasis Surgery</label>
			<input type="text" class="form-control" name="anamnesis__history_of_vesicolithiasis_surgery" value="{{$kasus->anamnesis->history_of_vesicolithiasis_surgery ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Dauer Catheter</label>
			<input type="text" class="form-control" name="anamnesis__dauer_cath" value="{{$kasus->anamnesis->dauer_cath ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Cystotomy</label>
			<input type="text" class="form-control" name="anamnesis__cystotomy" value="{{$kasus->anamnesis->cystotomy ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Prostate Biopsy Result</label>
			<input type="text" class="form-control" name="anamnesis__prostate_biopsi_result" value="{{$kasus->anamnesis->prostate_biopsi_result ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Cystoscopy</label>
			<input type="text" class="form-control" name="anamnesis__cystoscopy" value="{{$kasus->anamnesis->cystoscopy ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">IPSS</label>
			<input type="text" class="form-control" name="anamnesis__ipss" value="{{$kasus->anamnesis->ipss ?? ''}}">
		</div>
	</div>
	
	
</div>