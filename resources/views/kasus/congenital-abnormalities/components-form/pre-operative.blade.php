<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">PRE OPERATIVE</h1>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Length of Stay</label>
			<input type="text" class="form-control" name="lama_perawatan_hari" value="{{$kasus->lama_perawatan_hari ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Complaint</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Main Complaint</label>
			<input type="text" class="form-control" name="anamnesis__main_complaint" value="{{$kasus->anamnesis->main_complaint ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Others Complaint</label>
			<input type="text" class="form-control" name="anamnesis__complaint_others" value="{{$kasus->anamnesis->complaint_others ?? ''}}">
		</div>
	</div>
</div>

<div class="row mt-2">
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_premature ?? '','label'=>'Premature','name'=>'pre_operative__comorbid_premature'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_hypospadia ?? '','label'=>'Hypospadia','name'=>'pre_operative__comorbid_hypospadia'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_ambigous_genitalia ?? '','label'=>'Ambigous Genitalia','name'=>'pre_operative__comorbid_ambigous_genitalia'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_anorectal_malformation ?? '','label'=>'Anorectal Malformation','name'=>'pre_operative__comorbid_anorectal_malformation'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_down_syndrome ?? '','label'=>'Down Syndrome','name'=>'pre_operative__comorbid_down_syndrome'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_omphalocele ?? '','label'=>'Omphalocele','name'=>'pre_operative__comorbid_omphalocele'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_gastrosciziz ?? '','label'=>'Gastrosciziz','name'=>'pre_operative__comorbid_gastrosciziz'])
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Others Comorbid</label>
			<input type="text" class="form-control" name="pre_operative__comorbid_others" value="{{$kasus->operative_pre->comorbid_others ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Surgical History</label>
			<input type="text" class="form-control" name="pre_operative__surgical_history" value="{{$kasus->operative_pre->surgical_history ?? ''}}">
		</div>
	</div>
</div>