<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">POST OPERATIVE</h1>
	</div>
</div>



<div class="row my-2">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label class="label">Pathology Result</label>
					<input type="text" class="form-control" name="penunjang_lab_post__pathology_results" value="{{$kasus->penunjang_lab_post->pathology_results ?? ''}}">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">

	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->complication ?? '', 'label'=>'Complication','name'=>'post_operative__complication'])
	</div>
	<div class="col-12"  style="display: none">
		<div class="form-group">
			<label class="label">Cause of Complication</label>
			<input type="text" class="form-control" name="post_operative__complication_cause" value="{{$kasus->operative_post->complication_cause ?? ''}}">
		</div>
	</div>
	<div class="col-12"  style="display: none">
		<div class="form-group">
			<label class="label">Action</label>
			<input type="text" class="form-control" name="post_operative__complication_action" value="{{$kasus->operative_post->complication_action ?? ''}}">
		</div>
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