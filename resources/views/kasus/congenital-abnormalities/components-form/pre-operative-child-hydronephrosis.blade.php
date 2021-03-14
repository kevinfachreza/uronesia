<div class="card">
	<div class="card-header">
		<button class="btn btn-primary btn-toggle-show pull-right" type="button">
			Show
		</button>
		<h5>Child Hydronephrosis</h5>
	</div>
	<div class="card-body d-none">

		<div class="row mt-2">
			<div class="col-12">
				<div class="form-group">
					<label class="label">Other Complain</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_other_complain" value="{{$kasus->physical_exam->child_hydro_other_complain ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->child_hydro_gender ?? '','label'=>'Gender','name'=>'physical_exam__child_hydro_gender','options' => ['Male','Female']])
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">History Antenatal Care </label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_history_antenatal_care" value="{{$kasus->physical_exam->child_hydro_history_antenatal_care ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">History Perinatal</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_perinatal" value="{{$kasus->physical_exam->child_hydro_perinatal ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">Developmental Status</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_developmental_status" value="{{$kasus->physical_exam->child_hydro_developmental_status ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">Other Congenital Disease</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_other_congenital_status" value="{{$kasus->physical_exam->child_hydro_other_congenital_status ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<h5>Physical Examination</h5>
				<h6 class="text-primary">General Status</h6>

				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->child_hydro_head_dismorphic ?? '','label'=>'Head Dismorphic','name'=>'physical_exam__child_hydro_head_dismorphic'])

				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->child_hydro_abdominal_mass ?? '','label'=>'Abdominal Mass','name'=>'physical_exam__child_hydro_abdominal_mass'])

				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->child_hydro_meningocele ?? '','label'=>'Meningocele/Spina Bifida','name'=>'physical_exam__child_hydro_meningocele'])

				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->child_hydro_limb ?? '','label'=>'Limb','name'=>'physical_exam__child_hydro_limb'])
			</div>
			<div class="col-12">
				<h6 class="text-primary">Urological Status</h6>

				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->child_hydro_urogical_flank ?? '','label'=>'Flank','name'=>'physical_exam__child_hydro_urogical_flank'])
				
				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->child_hydro_urogical_suprapubic ?? '','label'=>'Suprapubic','name'=>'physical_exam__child_hydro_urogical_suprapubic'])

				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->child_hydro_ext_genitalia ?? '','label'=>'External Genitalia','name'=>'physical_exam__child_hydro_ext_genitalia'])

				
			</div>
		</div>
	</div>
</div>