<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">POST OPERATIVE</h1>
	</div>
	<div class="col-12">
		<h5>Micturition Post Catheterization</h5>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Urinary Retention</label>
			<input type="text" class="form-control" name="post_operative__micturition_urinary_retention" value="{{$kasus->operative_post->micturition_urinary_retention ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Disuria</label>
			<input type="text" class="form-control" name="post_operative__micturition_disuria" value="{{$kasus->operative_post->micturition_disuria ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Incontinence</label>
			<input type="text" class="form-control" name="post_operative__micturition_incontinence" value="{{$kasus->operative_post->micturition_incontinence ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Treatment</label>
			<input type="text" class="form-control" name="post_operative__micturition_treatment" value="{{$kasus->operative_post->micturition_treatment ?? ''}}">
		</div>
	</div>
</div>

<div class="row mt-2">
	<div class="col-12">
		<h5>Other Disease</h5>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->orchitis ?? '', 'label'=>'Orchitis','name'=>'post_operative__orchitis'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->septic ?? '', 'label'=>'Septic','name'=>'post_operative__septic'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->uremia ?? '', 'label'=>'Uremia','name'=>'post_operative__uremia'])
	</div>
</div>




<div class="row">
	<div class="col-12">
		<h5>Death</h5>
	</div>

	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->death ?? '', 'label'=>'Death','name'=>'post_operative__death'])
	</div>
	<div class="col-12"  style="display: none">
		<div class="form-group">
			<label class="label">Cause of Death</label>
			<input type="text" class="form-control" name="post_operative__death_cause" value="{{$kasus->operative_post->death_cause ?? ''}}">
		</div>
	</div>
</div>

<div class="row my-2">
	<div class="col-12">
		<h5>Laboratory Result</h5>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">BLOOD</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">PSA</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_psa" value="{{$kasus->penunjang_lab_post->lab_psa ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Clotting Time</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_clotting_time" value="{{$kasus->penunjang_lab_post->lab_clotting_time ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Bleeding Time</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_bleeding_time" value="{{$kasus->penunjang_lab_post->lab_bleeding_time ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">HB</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_hb" value="{{$kasus->penunjang_lab_post->lab_hb ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">HT</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_ht" value="{{$kasus->penunjang_lab_post->lab_ht ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Leu</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_leucocyte" value="{{$kasus->penunjang_lab_post->lab_leucocyte ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">TR</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_tr" value="{{$kasus->penunjang_lab_post->lab_tr ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">UR</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_ur" value="{{$kasus->penunjang_lab_post->lab_ur ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">CR</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_cr" value="{{$kasus->penunjang_lab_post->lab_cr ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Na</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_na" value="{{$kasus->penunjang_lab_post->lab_na ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">K</label>
			<input type="text" class="form-control" name="penunjang_lab_post__lab_k" value="{{$kasus->penunjang_lab_post->lab_k ?? ''}}">
		</div>
	</div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">PATHOLOGY RESULT</h6>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Pathology Results</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__pathology_results" value="{{$kasus->penunjang_lab_post->pathology_results ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
	<h5>Uroflowmetry</h5>
	@include('kasus.components-form.uroflowmetry-non-number',['bulan_ke'=>['post'],'default' => $uriflowmetry])
</div>