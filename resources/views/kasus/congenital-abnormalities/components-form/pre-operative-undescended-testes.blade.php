<div class="card">
	<div class="card-header">
		<button class="btn btn-primary btn-toggle-show pull-right" type="button">
			Show
		</button>
		<h5>Undescended Testis</h5>
	</div>
	<div class="card-body d-none">

		<div class="row mt-2">
			<div class="col-12">
				<h5>Right Testis</h5>
			</div>
			<div class="col-12">
				@include('kasus.components-form.radio-button-multi-opsi-without-label',['default'=> $kasus->physical_exam->testes_right_palpable ?? '','label'=>'','name'=>'physical_exam__testes_right_palpable','options' => ['Non Palpable','Palpable']])

			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">Size</label>
					<input type="text" class="form-control" name="physical_exam__testes_right_palpable_size" value="{{$kasus->physical_exam->testes_right_palpable_size ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">Position</label>
					<input type="text" class="form-control" name="physical_exam__testes_right_palpable_pos" value="{{$kasus->physical_exam->testes_right_palpable_pos ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<h5>Left Testis</h5>
			</div>
			<div class="col-12">
				@include('kasus.components-form.radio-button-multi-opsi-without-label',['default'=> $kasus->physical_exam->testes_left_palpable ?? '','label'=>'','name'=>'physical_exam__testes_left_palpable','options' => ['Non Palpable','Palpable']])
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">Size</label>
					<input type="text" class="form-control" name="physical_exam__testes_left_palpable_size" value="{{$kasus->physical_exam->testes_left_palpable_size ?? ''}}">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label">Position</label>
					<input type="text" class="form-control" name="physical_exam__testes_left_palpable_pos" value="{{$kasus->physical_exam->testes_left_palpable_pos ?? ''}}">
				</div>
			</div>
		</div>
	</div>
</div>