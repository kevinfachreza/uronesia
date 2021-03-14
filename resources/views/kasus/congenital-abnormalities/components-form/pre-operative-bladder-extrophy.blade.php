<div class="card">
	<div class="card-header">
		<button class="btn btn-primary btn-toggle-show pull-right" type="button">
			Show
		</button>
		<h5>Bladder Extrophy</h5>
	</div>
	<div class="card-body d-none">

		<div class="row mt-2">
			<div class="col-12">
				@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->bladder_gender ?? '','label'=>'Classic Extrophy','name'=>'physical_exam__bladder_gender','options' => ['Male','Female']])
			</div>
			<div class="col-12">
				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->bladder_epispadia ?? '','label'=>'Epispadia','name'=>'physical_exam__bladder_epispadia'])
			</div>
			<div class="col-12">
				@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->bladder_cloacal_extrophy ?? '','label'=>'Cloacal Extrophy','name'=>'physical_exam__bladder_cloacal_extrophy'])
			</div>
		</div>
	</div>
</div>