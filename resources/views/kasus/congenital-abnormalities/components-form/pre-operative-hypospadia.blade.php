<div class="card">
	<div class="card-header">
		<button class="btn btn-primary btn-toggle-show pull-right" type="button">
			Show
		</button>
		<h5>Hypospadia</h5>
	</div>
	<div class="card-body d-none">

		<div class="row mt-2">
			<div class="col-12">
				<h5>Physical Examination</h5>
				<h6 class="text-primary">Glans</h6>
				<div class="form-group">
					<label class="label">Hole</label>
					<input type="text" class="form-control" name="physical_exam__glans_hole" value="{{$kasus->physical_exam->glans_hole ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Shape</label>
					<input type="text" class="form-control" name="physical_exam__glans_shape" value="{{$kasus->physical_exam->glans_shape ?? ''}}">
				</div>

				<h6 class="text-primary">Meatus</h6>
				<div class="form-group">
					<label class="label">Size</label>
					<input type="text" class="form-control" name="physical_exam__meatus_size" value="{{$kasus->physical_exam->meatus_size ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Position </label>
					<input type="text" class="form-control" name="physical_exam__meatus_position" value="{{$kasus->physical_exam->meatus_position ?? ''}}">
				</div>

				<h6 class="text-primary">Phallus</h6>
				<div class="form-group">
					<label class="label">Size</label>
					<input type="text" class="form-control" name="physical_exam__phallus_size" value="{{$kasus->physical_exam->phallus_size ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Urethral Plate</label>
					<input type="text" class="form-control" name="physical_exam__phallus_urethral_plate" value="{{$kasus->physical_exam->phallus_urethral_plate ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Chordee</label>
					<input type="text" class="form-control" name="physical_exam__phallus_chordee" value="{{$kasus->physical_exam->phallus_chordee ?? ''}}">
				</div>

				<h6 class="text-primary">Torque</h6>
				<div class="form-group">
					<label class="label">Level</label>
					<input type="text" class="form-control" name="physical_exam__torque_level" value="{{$kasus->physical_exam->torque_level ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Direction</label>
					<input type="text" class="form-control" name="physical_exam__torque_direction" value="{{$kasus->physical_exam->torque_direction ?? ''}}">
				</div>

				<h6 class="text-primary">Foreskin</h6>
				<div class="form-group">
					<label class="label">Hooded</label>
					<input type="text" class="form-control" name="physical_exam__foreskin_hooded" value="{{$kasus->physical_exam->foreskin_hooded ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Size</label>
					<input type="text" class="form-control" name="physical_exam__foreskin_size" value="{{$kasus->physical_exam->foreskin_size ?? ''}}">
				</div>

				<h6 class="text-primary">Penoscrotal Transposition/Scrotal Bifid</h6>
				<div class="form-group">
					<label  class="label">Description</label>
					<input type="text" class="form-control" name="physical_exam__penoscotral_transposition" value="{{$kasus->physical_exam->penoscotral_transposition ?? ''}}">
				</div>

				<h6 class="text-primary">Testis</h6>
				<div class="form-group">
					<label class="label">UDT</label>
					<input type="text" class="form-control" name="physical_exam__testes_udt" value="{{$kasus->physical_exam->testes_udt ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Size</label>
					<input type="text" class="form-control" name="physical_exam__testes_size" value="{{$kasus->physical_exam->testes_size ?? ''}}">
				</div>

				<h6 class="text-primary">Measurement (mm/Penis On Traction)</h6>
				<div class="form-group">
					<label class="label">Penoscrotal Junction - Tip</label>
					<input type="text" class="form-control" name="physical_exam__penis_meas_penoscrotal_junction_tip" value="{{$kasus->physical_exam->penis_meas_penoscrotal_junction_tip ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Penoscrotal Junction - Meatus</label>
					<input type="text" class="form-control" name="physical_exam__penis_meas_penoscrotal_junction_meatus" value="{{$kasus->physical_exam->penis_meas_penoscrotal_junction_meatus ?? ''}}">
				</div>
				<div class="form-group">
					<label class="label">Meatus - Tip</label>
					<input type="text" class="form-control" name="physical_exam__penis_meas_meatus_tip" value="{{$kasus->physical_exam->penis_meas_meatus_tip ?? ''}}">
				</div>

			</div>

			<div class="col-12">
				<h6 class="text-primary">Hormonal Manipulated Before Surgery </h6>
				<div class="form-group">
					<label  class="label">Description</label>
					<input type="text" class="form-control" name="physical_exam__hormonal_manipulated_before_surgery" value="{{$kasus->physical_exam->hormonal_manipulated_before_surgery ?? ''}}">
				</div>
			</div>

			<div class="col-12">
				<h6 class="text-primary">History Of Surgery</h6>
				<div class="form-group">
					<label  class="label">Description</label>
					<input type="text" class="form-control" name="physical_exam__hypospadia_surgical_history" value="{{$kasus->physical_exam->hypospadia_surgical_history ?? ''}}">
				</div>
			</div>

			<div class="col-12">
				<h6 class="text-primary">Others</h6>
				<div class="form-group">
					<label  class="label">Description</label>
					<input type="text" class="form-control" name="physical_exam__hypospadia_others" value="{{$kasus->physical_exam->hypospadia_others ?? ''}}">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<div class="form-group">
			<label  class="label">Other Congenital Abnormalities</label>
			<input type="text" class="form-control" name="physical_exam__other_congenital_abnormalities" value="{{$kasus->physical_exam->other_congenital_abnormalities ?? ''}}">
		</div>
	</div>
</div>