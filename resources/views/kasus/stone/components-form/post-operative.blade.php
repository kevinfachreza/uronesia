<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">POST OPERATIVE</h1>
	</div>
</div>



<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			@php 
				$files_title[] = 'BNO Post Ops';

				$files_names[] = 'post-ops-bno'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h4>Laboratory Result</h4>
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
        </div>
    </div>
</div>

<div class="row mt-2">
	<div class="col-12">
		<div class="form-group">
			<label class="label">VAS</label>
			<input type="text" class="form-control" value="{{$kasus->operative_post->vas ?? ''}}" name="post_operative__vas" >
		</div>
		<div class="form-group">
			<label class="label">Nefrostomy Production (cc/color) </label>
			<input type="number" class="form-control" value="{{$kasus->operative_post->nefrostomy_production ?? ''}}" name="post_operative__nefrostomy_production" >
		</div>
		@include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_post->analgetics ?? '','label'=>'Analgetics','name'=>'post_operative__analgetics','options' => ['IV','Oral']])
		<div class="form-group">
			<label class="label">Catheter Production (cc/color)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_post->cath_production ?? ''}}" name="post_operative__cath_production" >
		</div>
		<div class="form-group">
			<label class="label">Transfusion (kolf)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_post->transfusion ?? ''}}" name="post_operative__transfusion" >
		</div>

		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_post->wound_dehicense ?? '','label'=>'Wound Dehicense','name'=>'post_operative__wound_dehicense'])
	</div>
</div>