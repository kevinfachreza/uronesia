<div class="row">
	<div class="col-12">
		<h5>Physical Exam</h5>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">CVA Tenderness</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->cva_tenderness_left ?? '','label'=>'Left','name'=>'physical_exam__cva_tenderness_left','options' => ['Normal','Abnormal']])
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->cva_tenderness_right ?? '','label'=>'Right','name'=>'physical_exam__cva_tenderness_right','options' => ['Normal','Abnormal']])
		</div>
	</div>

	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Renal Mass</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_mass_left ?? '','label'=>'Left','name'=>'physical_exam__renal_mass_left','options' => ['Normal','Abnormal']])
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_mass_right ?? '','label'=>'Right','name'=>'physical_exam__renal_mass_right','options' => ['Normal','Abnormal']])
		</div>
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Vesica Urinary</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->vesica_urinary_tenderness ?? '','label'=>'Tenderness','name'=>'physical_exam__vesica_urinary_tenderness','options' => ['Normal','Abnormal']])
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->vesica_urinary_mass ?? '','label'=>'Mass','name'=>'physical_exam__vesica_urinary_mass','options' => ['Normal','Abnormal']])
		</div>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->urethral_meatus ?? '','label'=>'Urethral Meatus','name'=>'physical_exam__urethral_meatus','options' => ['Normal','Narrow']])
	</div>
	<div class="col-12">
		<div class="form-group">

			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->hypospadia ?? '','label'=>'Hypospadia','name'=>'physical_exam__hypospadia','options' => ['Yes','No']])
		</div>
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Testis Morphology</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_morphology_left ?? '','label'=>'Left','name'=>'physical_exam__testes_morphology_left','options' => ['Normal','Abnormal']])
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Description</label>
			<input type="text" class="form-control" name="physical_exam__testes_morphology_left_text" value="{{$kasus->physical_exam->testes_morphology_left_text ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_morphology_right ?? '','label'=>'Right','name'=>'physical_exam__testes_morphology_right','options' => ['Normal','Abnormal']])
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Description</label>
			<input type="text" class="form-control" name="physical_exam__testes_morphology_right_text" value="{{$kasus->physical_exam->testes_morphology_right_text ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Rectal Toucher</h6>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Prostate Weight</label>
			<input type="text" class="form-control" name="physical_exam__rectal_toucher_prostate_weight" value="{{$kasus->physical_exam->rectal_toucher_prostate_weight ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Surface</label>
			<input type="text" class="form-control" name="physical_exam__rectal_toucher_surface" value="{{$kasus->physical_exam->rectal_toucher_surface ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Consistency</label>
			<input type="text" class="form-control" name="physical_exam__rectal_toucher_consistency" value="{{$kasus->physical_exam->rectal_toucher_consistency ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Nodul</label>
			<input type="text" class="form-control" name="physical_exam__rectal_toucher_nodul" value="{{$kasus->physical_exam->rectal_toucher_nodul ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Tenderness</label>
			<input type="text" class="form-control" name="physical_exam__rectal_toucher_tenderness" value="{{$kasus->physical_exam->rectal_toucher_tenderness ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->hernia  ?? '', 'label'=>'Hernia','name'=>'physical_exam__hernia'])
	</div>

	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->haemorrhoid  ?? '', 'label'=>'Haemorrhoid','name'=>'physical_exam__haemorrhoid'])
	</div>
</div>