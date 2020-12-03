
<div class="row files-upload">
	<div class="col-lg-12 col-md-12">
		<div class="row">
			@php 
				$files_title[] = 'Radiology Result';

				$files_names[] = 'pre-radiology-result'; 
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
                    <label class="label">TR</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_tr" value="{{$kasus->penunjang_lab_pre->lab_tr ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">UR</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_ur" value="{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">CR</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cr" value="{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Bacteria</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_bacteria" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_bacteria ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Sensitive</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_sensitive" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_sensitive ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Resistance</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_urine_cult_resistance" value="{{$kasus->penunjang_lab_pre->lab_urine_cult_resistance ?? ''}}">
                </div>
            </div>
        </div>
    </div>
</div>