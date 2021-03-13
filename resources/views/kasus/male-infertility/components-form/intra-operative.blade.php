<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">INTRA OPERATIVE</h1>
	</div>
	<div class="col-12">
		<h5>Treatment</h5>
		<h6 class="text-primary">Non Invasive</h6> 
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->non_invasive_empiric ?? '','label'=>'Empiric','name'=>'intra_operative__non_invasive_empiric'])

		<div class="form-group">
			<label class="label">Drug Name</label>
			<input type="text" class="form-control" name="intra_operative__non_invasive_empiric_drug_name" value="{{$kasus->operative_intra->non_invasive_empiric_drug_name ?? ''}}">
		</div>

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->non_invasive_hormonal ?? '','label'=>'Hormonal','name'=>'intra_operative__non_invasive_hormonal'])

		<div class="form-group">
			<label class="label">Drug Name</label>
			<input type="text" class="form-control" name="intra_operative__non_invasive_hormonal_drug_name" value="{{$kasus->operative_intra->non_invasive_hormonal_drug_name ?? ''}}">
		</div>

		<h6 class="text-primary">Invasive</h6> 
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->invasive_mesa ?? '','label'=>'MESA','name'=>'intra_operative__invasive_mesa'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->invasive_pesa ?? '','label'=>'PESA','name'=>'intra_operative__invasive_pesa'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->invasive_tesa ?? '','label'=>'TESA','name'=>'intra_operative__invasive_tesa'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->invasive_tese ?? '','label'=>'TESE','name'=>'intra_operative__invasive_tese'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->invasive_anastomosis ?? '','label'=>'Anastomosis','name'=>'intra_operative__invasive_anastomosis'])

		<div class="form-group">
			<label class="label">Others</label>
			<input type="text" class="form-control" name="intra_operative__treatment_others" value="{{$kasus->operative_intra->treatment_others ?? ''}}">
		</div>

        <div class="form-group">
            <label class="label">Operation Date</label>
            <input type="date" class="form-control" name="intra_operative__operation_date" value="{{$kasus->operative_intra->operation_date ?? ''}}">
        </div>

	</div>
	<div class="col-12">
		<div class="row">
			@php 
			$files_title[] = 'Clinical Picture';

			$files_names[] = 'intra-clinical'; 
			@endphp 

			@foreach($files_title as $index => $title)
			@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach


		</div>
	</div>

</div>