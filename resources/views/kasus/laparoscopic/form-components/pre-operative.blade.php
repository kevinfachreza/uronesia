<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">PRE OPERATIVE</h1>
	</div>
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Comorbid</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_dm ?? '','label'=>'DM','name'=>'pre_operative__comorbid_dm'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_hypertension ?? '','label'=>'Hypertension','name'=>'pre_operative__comorbid_hypertension'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_cardiac ?? '','label'=>'Cardiac','name'=>'pre_operative__comorbid_cardiac'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_stroke ?? '','label'=>'Stroke','name'=>'pre_operative__comorbid_stroke'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->heart_stroke ?? '','label'=>'Heart Disease','name'=>'pre_operative__heart_stroke'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_tb ?? '','label'=>'TB','name'=>'pre_operative__comorbid_tb'])
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Others Comorbid</label>
			<input type="text" class="form-control" name="pre_operative__comorbid_others" value="{{$kasus->operative_pre->comorbid_others ?? ''}}">
		</div>
	</div>
</div>
<hr>
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
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_hb" value="{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">HT</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_ht" value="{{$kasus->penunjang_lab_pre->lab_ht ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">L</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_l" value="{{$kasus->penunjang_lab_pre->lab_l ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Tr</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_tr" value="{{$kasus->penunjang_lab_pre->lab_tr ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Ur</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_ur" value="{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Cr</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cr" value="{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			<div class="col-12">
				<h5>Radiology Result</h5>
			</div>
			@php 
				$files_title[] = 'USG';
				$files_title[] = 'BNO';
				$files_title[] = 'IVP';
				$files_title[] = 'CT';
				$files_title[] = 'MRI';

				$files_names[] = 'radiology-pre-usg'; 
				$files_names[] = 'radiology-pre-bno'; 
				$files_names[] = 'radiology-pre-ivp'; 
				$files_names[] = 'radiology-pre-ct'; 
				$files_names[] = 'radiology-pre-mri'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>