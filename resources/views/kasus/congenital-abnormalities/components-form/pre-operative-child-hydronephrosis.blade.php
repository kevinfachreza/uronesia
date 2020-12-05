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
				<div class="form-group">
					<label class="label">Head Dismorphic</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_head_dismorphic" value="{{$kasus->physical_exam->child_hydro_head_dismorphic ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Abdominal Mass</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_abdominal_mass" value="{{$kasus->physical_exam->child_hydro_abdominal_mass ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Meningocele/Spina Bifida</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_meningocele" value="{{$kasus->physical_exam->child_hydro_meningocele ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Limb</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_limb" value="{{$kasus->physical_exam->child_hydro_limb ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<h6 class="text-primary">Urological Status</h6>
				<div class="form-group">
					<label class="label">Flank</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_urogical_flank" value="{{$kasus->physical_exam->child_hydro_urogical_flank ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Suprapubic</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_urogical_suprapubic" value="{{$kasus->physical_exam->child_hydro_urogical_suprapubic ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">External Genitalia</label>
					<input type="text" class="form-control" name="physical_exam__child_hydro_ext_genitalia" value="{{$kasus->physical_exam->child_hydro_ext_genitalia ?? ''}}">
				</div>
			</div>
		</div>
	</div>
</div>