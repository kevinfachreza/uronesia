<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">POST OPERATIVE</h1>
	</div>

	<div class="col-12">
		<div class="form-group">
			<label class="label">Drain (cc)</label>
			<input type="text" class="form-control" name="post_operative__drain" value="{{$kasus->operative_post->drain ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Urethral Catheter (cc)</label>
			<input type="text" class="form-control" name="post_operative__urethral_cath" value="{{$kasus->operative_post->urethral_cath ?? ''}}">
		</div>
	</div>


	@php 
		$files_title[] = 'BNO Post Operative';

		$files_names[] = 'post-operative-bno'; 
	@endphp 

	@foreach($files_title as $index => $title)
		@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
	@endforeach

	<div class="col-12">
		<div class="form-group">
			<label class="label">BNO Post Operative</label>
			<input type="text" class="form-control" name="post_operative__bno" value="{{$kasus->operative_post->bno ?? ''}}">
		</div>
	</div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Laboratory Result</h5>
            </div>
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">BLOOD</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">HB</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_hb" value="{{$kasus->penunjang_lab_post->lab_hb ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Leucocyte</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_leucocyte" value="{{$kasus->penunjang_lab_post->lab_leucocyte ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Platelets</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_trombocyte" value="{{$kasus->penunjang_lab_post->lab_trombocyte ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Ureum</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_ur" value="{{$kasus->penunjang_lab_post->lab_ur ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Creatinine</label>
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
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Cl</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_cl" value="{{$kasus->penunjang_lab_post->lab_cl ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-12">
		<div class="form-group">
			<label class="label">Recipient Renogram</label>
			<input type="text" class="form-control" name="post_operative__recipient_renogram" value="{{$kasus->operative_post->recipient_renogram ?? ''}}">
		</div>
	</div>
</div>

<div class="row">

	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->complication ?? '', 'label'=>'Complication','name'=>'post_operative__complication'])
	</div>
	<div class="col-12"  style="display: none">
		<div class="form-group">
			<label class="label">Cause</label>
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