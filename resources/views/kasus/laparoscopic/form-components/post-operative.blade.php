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
			<label class="label">Cath Production (cc)</label>
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
                    <label class="label">HT</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_ht" value="{{$kasus->penunjang_lab_post->lab_ht ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">L</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_l" value="{{$kasus->penunjang_lab_post->lab_l ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Tr</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_tr" value="{{$kasus->penunjang_lab_post->lab_tr ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Ur</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_ur" value="{{$kasus->penunjang_lab_post->lab_ur ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Cr</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__lab_cr" value="{{$kasus->penunjang_lab_post->lab_cr ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
	<div class="col-12">
		<div class="form-group">
			<label class="label">Diet</label>
			<input type="text" class="form-control" name="post_operative__diet" value="{{$kasus->operative_post->diet ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">VAS</label>
			<input type="text" class="form-control" name="post_operative__vas" value="{{$kasus->operative_post->vas ?? ''}}">
		</div>
	</div>

    <div class="col-12">

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->analgetics_iv ?? '','label'=>'Analgetics IV','name'=>'post_operative__analgetics_iv'])
    </div>
    <div class="col-12">

        <div class="form-group">
            <label class="label">Drug Name </label>
            <input type="text" class="form-control" value="{{$kasus->operative_post->analgetics_iv_drug ?? ''}}" name="post_operative__analgetics_iv_drug" >
        </div>
    </div>
    <div class="col-12">
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->analgetics_oral ?? '','label'=>'Analgetics Oral','name'=>'post_operative__analgetics_oral'])
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class="label">Drug Name </label>
            <input type="text" class="form-control" value="{{$kasus->operative_post->analgetics_oral_drug ?? ''}}" name="post_operative__analgetics_oral_drug" >
        </div>
    </div>
</div>