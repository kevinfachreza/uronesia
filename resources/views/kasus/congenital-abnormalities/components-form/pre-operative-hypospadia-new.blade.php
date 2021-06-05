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


				<h6 class="text-primary">Site of Urethral Meatus <small>Before Chordee Correction</small></h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_site_urethral_before ?? '',
				'name'=>'physical_exam__hypospadia_site_urethral_before',
				'path' => url('img/hypospadia'),
				'options' => ['1-glanular.jpg','1-distal-penile.jpg','1-proximal.jpg'],
				'values'=>['glanular','distal-penile','proximal'],
				'titles'=>['Glanular Hypospadias','Distal Penile Hypospadias','Proximal Hypospadias']])

				<h6 class="text-primary">Site of Urethral Meatus <small>After Chordee Correction</small></h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_site_urethral_after ?? '',
				'name'=>'physical_exam__hypospadia_site_urethral_after',
				'path' => url('img/hypospadia'),
				'options' => ['2-glanular.jpg','2-distal-penile.jpg','2-proximal.jpg'],
				'values'=>['glanular','distal-penile','proximal'],
				'titles'=>['Glanular Hypospadias','Distal Penile Hypospadias','Proximal Hypospadias']])

				<h6 class="text-primary">Prepuce</h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_prepuce ?? '',
				'name'=>'physical_exam__hypospadia_prepuce',
				'path' => url('img/hypospadia'),
				'options' => ['3-complete.jpg','3-incomplete.jpg'],
				'values'=>['complete','incomplete'],
				'titles'=>['Complete','Incomplete']])

				<h6 class="text-primary">Glans</h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_glans ?? '',
				'name'=>'physical_exam__hypospadia_glans',
				'path' => url('img/hypospadia'),
				'options' => ['4-cleft.jpg','4-incomplete-cleft.jpg','4-flat.jpg'],
				'values'=>['cleft','incomplete-cleft','flat'],
				'titles'=>['Cleft','Incomplete Cleft','Flat']])

				<h6 class="text-primary">Chordee</h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_chordee ?? '',
				'name'=>'physical_exam__hypospadia_chordee',
				'path' => url('img/hypospadia'),
				'options' => ['5-no.jpg','5-superficial.jpg','5-deep.jpg'],
				'values'=>['no','superficial','deep'],
				'titles'=>['No Chordee','Superficial Chordee','Deep Chordee']])

				<h6 class="text-primary">Urethral Plate Width</h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_urethral_plate_width ?? '',
				'name'=>'physical_exam__hypospadia_urethral_plate_width',
				'path' => url('img/hypospadia'),
				'options' => ['6-less.jpg','6-more.jpg'],
				'values'=>['less','more'],
				'titles'=>['<1cm','>=1cm']])

				<h6 class="text-primary">Penile Torsion</h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_penile_torsion ?? '',
				'name'=>'physical_exam__hypospadia_penile_torsion',
				'path' => url('img/hypospadia'),
				'options' => ['7-no.jpg','7-present.jpg'],
				'values'=>['no','present'],
				'titles'=>['No Torsion','Present']])

				<h6 class="text-primary">Penile Torsion</h6>

				@include('kasus.components-form.radio-button-multi-opsi-images',[
				'label'=>'',
				'default'=> $kasus->physical_exam->hypospadia_scrotal_transposition ?? '',
				'name'=>'physical_exam__hypospadia_scrotal_transposition',
				'path' => url('img/hypospadia'),
				'options' => ['8-no.jpg','8-present.jpg'],
				'values'=>['no','present'],
				'titles'=>['No Transposition','Present']])
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