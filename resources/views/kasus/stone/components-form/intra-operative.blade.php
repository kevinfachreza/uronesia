<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">INTRA OPERATIVE</h1>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Operator</label>
			<input type="text" class="form-control" name="intra_operative__operator" value="{{$kasus->operative_intra->operator ?? ''}}">
		</div>
	</div>
	<div class="col-12">
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->surgical_technique_position ?? '','label'=>'Position','name'=>'intra_operative__surgical_technique_position','options' => ['Right','Left','Both']])
	</div>
	<div class="col-12">
		<h4>Surgical Technique</h4>
	</div>
	<div class="col-12">

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_is_open ?? '','label'=>'Is Open','name'=>'intra_operative__surgical_technique_is_open'])

		<div class="form-group">
			<label class="label">Description</label>
			<input type="text" class="form-control" name="intra_operative__surgical_technique_open_desc" value="{{$kasus->operative_intra->surgical_technique_open_desc ?? ''}}">
		</div>

	</div>

	<div class="col-12">
		<h5>PCNL</h5>
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->pcnl_pos ?? '','label'=>'Case Type','name'=>'intra_operative__pcnl_pos','options' => ['Supine','Prone','Lateral']])

        <h6 class="text-primary">Operation Time (Minutes)</h6>

		<div class="form-group">
			<label class="label">Cystoscopy</label>
			<input type="number" class="form-control" name="intra_operative__pcnl_time_cystocopy" value="{{$kasus->operative_intra->pcnl_time_cystocopy ?? ''}}">
		</div>
        
		<div class="form-group">
			<label class="label">PCNL - Puncture</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->pcnl_time_puncture ?? ''}}" name="intra_operative__pcnl_time_puncture" >
		</div>
        
		<div class="form-group">
			<label class="label">PCNL - Dilatation</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->pcnl_time_dilatation ?? ''}}" name="intra_operative__pcnl_time_dilatation" >
		</div>
        
		<div class="form-group">
			<label class="label">PCNL - Lithotripsi</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->pcnl_time_lithotripsi ?? ''}}" name="intra_operative__pcnl_time_lithotripsi" >
		</div>
        
		<div class="form-group">
			<label class="label">PCNL - DJ Stent</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->pcnl_time_dj_stent ?? ''}}" name="intra_operative__pcnl_time_dj_stent" >
		</div>
        
		<div class="form-group">
			<label class="label">PCNL - Nefrostomy</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->pcnl_time_nefrostomy ?? ''}}" name="intra_operative__pcnl_time_nefrostomy" >
		</div>
        
		<div class="form-group">
			<label class="label">Total Time</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->pcnl_time_total_time ?? ''}}" name="intra_operative__pcnl_time_total_time" >
		</div>

		<h6 class="text-primary">Puncture</h6>

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->pcnl_puncture_below_costa_12 ?? '','label'=>'Below Costa 12','name'=>'intra_operative__pcnl_puncture_below_costa_12'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->pcnl_puncture_above_costa_12 ?? '','label'=>'Above Costa 12','name'=>'intra_operative__pcnl_puncture_above_costa_12'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->pcnl_puncture_above_costa_11 ?? '','label'=>'Above Costa 11','name'=>'intra_operative__pcnl_puncture_above_costa_11'])

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->pcnl_puncture_type ?? '','label'=>'Type','name'=>'intra_operative__pcnl_puncture_type','options' => ['Calyx Inferior','Media','Superior']])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->pcnl_puncture_multi ?? '','label'=>'Multi Puncture','name'=>'intra_operative__pcnl_puncture_multi'])

		<h6 class="text-primary">Dilatation</h6>

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->pcnl_dilatation_type ?? '','label'=>'Type','name'=>'intra_operative__pcnl_dilatation_type','options' => ['Serial','Single Shoot','Baloon']])

		<div class="form-group">
			<label class="label">Number Amplatz (Fr)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->pcnl_dilatation_number ?? ''}}" name="intra_operative__pcnl_dilatation_number">
		</div>
	</div>
	<hr>
	<div class="col-12"> 
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_rirs ?? '','label'=>'RIRS','name'=>'intra_operative__surgical_technique_rirs'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_technique_urs ?? '','label'=>'URS','name'=>'intra_operative__surgical_technique_urs'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_vesico ?? '','label'=>'Vesicolithotripsi','name'=>'intra_operative__surgical_vesico'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->surgical_lithotripsi ?? '','label'=>'Liithotripsi Urethral stone','name'=>'intra_operative__surgical_lithotripsi'])

		<div class="form-group">
			<label class="label">Time (Minutes)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->time ?? ''}}" name="intra_operative__time">
		</div>
	</div>
	<hr>
	<div class="col-12">
		<h5>Fluoroscopy</h5>

		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->fluoroscopy_is ?? '','label'=>'Fluoroscopy','name'=>'intra_operative__fluoroscopy_is'])

		<div class="row fluoroscopy-intra-form" style="display: none">
			@php 
			$files_title[] = 'Intra Ops';
			$files_title[] = 'Post Ops';

			$files_names[] = 'fluoroscopy-intra'; 
			$files_names[] = 'fluoroscopy-post'; 
			@endphp 

			@foreach($files_title as $index => $title)
			@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach


		</div>

		<div class="form-group fluoroscopy-intra-form" style="display: none">
			<label class="label">Time (Minutes)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->fluoroscopy_time ?? ''}}" name="intra_operative__fluoroscopy_time">
		</div>
	</div>
	<div class="col-12">
		<h5>Stone Fragmentation</h5>

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->stone_frag_pneumatic ?? '','label'=>'Pneumatic','name'=>'intra_operative__stone_frag_pneumatic'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->stone_frag_ultrasound ?? '','label'=>'Ultrasound','name'=>'intra_operative__stone_frag_ultrasound'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->stone_frag_laser ?? '','label'=>'Laser','name'=>'intra_operative__stone_frag_laser'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->stone_frag_lowsley ?? '','label'=>'Lowsley','name'=>'intra_operative__stone_frag_lowsley'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->stone_frag_stone_punch ?? '','label'=>'Stone Punch','name'=>'intra_operative__stone_frag_stone_punch'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->stone_frag_hendrikson ?? '','label'=>'Hendrikson','name'=>'intra_operative__stone_frag_hendrikson'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->stone_frag_no ?? '','label'=>'No','name'=>'intra_operative__stone_frag_no'])

    </div>


	<div class="col-12">
		<h5>Complication</h5>

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->complication ?? '','label'=>'Is Complication','name'=>'intra_operative__complication'])

		<div class="form-group complication-intra-form" style="display: none">
			<label class="label">Perforation</label>
			<input type="text" class="form-control" value="{{$kasus->operative_intra->complication_perf_desc ?? ''}}" name="intra_operative__complication_perf_desc">
		</div>

		<div class="form-group complication-intra-form" style="display: none">
			<label class="label">Intestinal Perforation</label>
			<input type="text" class="form-control" value="{{$kasus->operative_intra->complication_intestinal_perf_desc ?? ''}}" name="intra_operative__complication_intestinal_perf_desc">
		</div>

		<div class="form-group complication-intra-form" style="display: none">
			<label class="label">Hydrothorax</label>
			<input type="text" class="form-control" value="{{$kasus->operative_intra->complication_hydrothorax ?? ''}}" name="intra_operative__complication_hydrothorax">
		</div>

    </div>
    <hr>
    <div class="col-12">
		<div class="form-group">
			<label class="label">Bleeding (cc)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->blood_loss ?? ''}}" name="intra_operative__blood_loss">
		</div>

		<div class="form-group">
			<label class="label">Transfusion (kolf)</label>
			<input type="number" class="form-control" value="{{$kasus->operative_intra->blood_transfusion ?? ''}}" name="intra_operative__blood_transfusion">
		</div>
    </div>

</div>


<div class="row">
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Failed Procedure</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->failed_procedure ?? '','label'=>'','name'=>'intra_operative__failed_procedure'])
	</div>
	<div class="col-12" style="display: none">
		<div class="form-group">
			<label class="label">Cause</label>
			<input type="text" class="form-control" name="intra_operative__failed_procedure_cause" value="{{$kasus->operative_intra->failed_procedure_cause ?? ''}}">
		</div>
	</div>
	<div class="col-12" style="display: none">
		<div class="form-group">
			<label class="label">Open Conversion</label>
			<input type="text" class="form-control" name="intra_operative__failed_procedure_open_conversion" value="{{$kasus->operative_intra->failed_procedure_open_conversion ?? ''}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Rest Stone</h6>
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->rest_stone_is ?? '','label'=>'','name'=>'intra_operative__rest_stone_is'])
	</div>
	<div class="col-12 rest-stone-intra-form" style="display: none">
        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->rest_stone_type ?? '','label'=>'Case Type','name'=>'intra_operative__rest_stone_type','options' => ['Right','Left','Both']])
	</div>
	<div class="col-12 rest-stone-intra-form" style="display: none">
		<div class="row">
			@php 
			$files_title = [];
			$files_names = [];

			$files_title[] = 'Rest Stone Clinical Picture';

			$files_names[] = 'rest-stone-clinical-picture'; 
			@endphp 

			@foreach($files_title as $index => $title)
			@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach


		</div>
	</div>		
	<div class="col-12 rest-stone-intra-form" style="display: none">
		<div class="form-group">
			<label class="label">Size</label>
			<input type="text" class="form-control" name="intra_operative__rest_stone_size" value="{{$kasus->operative_intra->rest_stone_size ?? ''}}">
		</div>
	</div>
	<div class="col-12 rest-stone-intra-form" style="display: none">
		<div class="form-group">
			<label class="label">Plan</label>
			<input type="text" class="form-control" name="intra_operative__rest_stone_plan" value="{{$kasus->operative_intra->rest_stone_plan ?? ''}}">
		</div>
	</div>
</div>