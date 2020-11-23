<div class="row">
	<div class="col-12">
		<h5>Physical Exam</h5>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">CVA Tenderness</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Left</label>
			<input type="text" class="form-control" name="physical_exam__cva_tenderness_left" value="{{$kasus->physical_exam->cva_tenderness_left ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Right</label>
			<input type="text" class="form-control" name="physical_exam__cva_tenderness_right" value="{{$kasus->physical_exam->cva_tenderness_right ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Renal Mass</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Left</label>
			<input type="text" class="form-control" name="physical_exam__renal_mass_left" value="{{$kasus->physical_exam->renal_mass_left ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Right</label>
			<input type="text" class="form-control" name="physical_exam__renal_mass_right" value="{{$kasus->physical_exam->renal_mass_right ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Vesica Urinary</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Tenderness</label>
			<input type="text" class="form-control" name="physical_exam__vesica_urinary_tenderness" value="{{$kasus->physical_exam->vesica_urinary_tenderness ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Mass</label>
			<input type="text" class="form-control" name="physical_exam__vesica_urinary_mass" value="{{$kasus->physical_exam->vesica_urinary_mass ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->urethral_meatus ?? '','label'=>'Urethral Meatus','name'=>'physical_exam__urethral_meatus','options' => ['Normal','Narrow']])
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Hypospadia</label>
			<input type="text" class="form-control" name="physical_exam__hypospadia" value="{{$kasus->physical_exam->hypospadia ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Testis Morphology</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Left</label>
			<input type="text" class="form-control" name="physical_exam__testes_morphology_left" value="{{$kasus->physical_exam->testes_morphology_left ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Right</label>
			<input type="text" class="form-control" name="physical_exam__testes_morphology_right" value="{{$kasus->physical_exam->testes_morphology_right ?? ''}}">
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