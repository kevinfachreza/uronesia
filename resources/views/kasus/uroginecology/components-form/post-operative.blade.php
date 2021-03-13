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


<div class="row mt-2">
	<div class="col-12">
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_post->apg ?? '','label'=>'APG','name'=>'post_operative__apg','options' => ['Dx','Sin','Bil']])
	</div>
</div>

<div class="row mt-2">
	<div class="col-12">
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_post->nefrostomy_production ?? '','label'=>'Nefrostomy Production','name'=>'post_operative__nefrostomy_production','options' => ['Dx','Sin','Bil']])


        <div class="form-group">
            <label class="label">Nefrostomy Production Dex (cc)</label>
            <input type="number" class="form-control" value="{{$kasus->operative_post->nefrostomy_production_dx ?? ''}}" name="post_operative__nefrostomy_production_dx" >
        </div>
        <div class="form-group">
            <label class="label">Nefrostomy Production Sin (cc)</label>
            <input type="number" class="form-control" value="{{$kasus->operative_post->nefrostomy_production_sin ?? ''}}" name="post_operative__nefrostomy_production_sin" >
        </div>
        <div class="form-group">
            <label class="label">Urethral Cathether Production (cc)</label>
            <input type="number" class="form-control" value="{{$kasus->operative_post->urethral_cath_production ?? ''}}" name="post_operative__urethral_cath_production" >
        </div>
		<div class="form-group">
			<label class="label">Catheter Production (cc)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_post->cath_production ?? ''}}" name="post_operative__cath_production" >
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
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Pathology Result</label>
                    <input type="text" class="form-control" name="penunjang_lab_post__pathology_results" value="{{$kasus->penunjang_lab_post->pathology_results ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row mt-2">
	<div class="col-12">
		<h6 class="text-primary">Plan</h6> 
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_post->plan_type ?? '','label'=>'Type','name'=>'post_operative__plan_type','options' => ['Remove','Reinsertion','DJ Stent', 'UK', 'Nefrostomy']])
    </div>
    <div class="col-12">
    	<div class="form-group">
    		<label class="label">Duration</label>
    		<input type="text" class="form-control" name="post_operative__plan_duration" value="{{$kasus->operative_post->plan_duration ?? ''}}">
    		<small> Ex : 1 month, 3 weeks</small>
    	</div>
    </div>
</div>