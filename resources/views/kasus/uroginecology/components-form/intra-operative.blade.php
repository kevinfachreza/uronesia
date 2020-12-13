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
		<h5>Consultation /Joint Operation</h5>
        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->urethro_sistocopy_diagnosis ?? '','label'=>'Urethro Sistoscopy Diagnostic','name'=>'intra_operative__urethro_sistocopy_diagnosis'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->bladder_mucosa_biopsy ?? '','label'=>'Bladder Mucosa Biopsy','name'=>'intra_operative__bladder_mucosa_biopsy'])

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->rpg_pos ?? '','label'=>'RPG','name'=>'intra_operative__rpg_pos','options' => ['Right','Left','Both']])

        <h6 class="text-primary">DJ Stent</h6> 

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->dj_stent_pos ?? '','label'=>'Position','name'=>'intra_operative__dj_stent_pos','options' => ['Right','Left','Both']])

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->dj_stent_duration ?? '','label'=>'Duration','name'=>'intra_operative__dj_stent_duration','options' => ['Short Term','Long Term']])
    
        <h6 class="text-primary">Ureter Cath</h6> 

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->ureter_cath ?? '','label'=>'Position','name'=>'intra_operative__ureter_cath','options' => ['Right','Left','Both']])


        <h6 class="text-primary">Nefrostomy</h6> 

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->nefrostomy_type ?? '','label'=>'Type','name'=>'intra_operative__nefrostomy_type','options' => ['Open','Percutan']])

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->nefrostomy_pos ?? '','label'=>'Position','name'=>'intra_operative__nefrostomy_pos','options' => ['Right','Left','Both']])


        <h6 class="text-primary">Trauma</h6> 

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->trauma_ureter ?? '','label'=>'Ureter','name'=>'intra_operative__trauma_ureter'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->trauma_bladder ?? '','label'=>'Bladder','name'=>'intra_operative__trauma_bladder'])

        @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_intra->trauma_urethra ?? '','label'=>'Urethra','name'=>'intra_operative__trauma_urethra'])
       

		<div class="form-group">
			<label class="label">Action</label>
			<input type="text" class="form-control" name="intra_operative__trauma_action" value="{{$kasus->operative_intra->trauma_action ?? ''}}">
		</div>


        <h6 class="text-primary">Identification</h6> 

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->identification ?? '','label'=>'Position','name'=>'intra_operative__identification','options' => ['Ureter','Bladder','Urethra']])


        <h6 class="text-primary">Release</h6> 

        @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->operative_intra->release ?? '','label'=>'Position','name'=>'intra_operative__release','options' => ['Ureter','Bladder','Urethra']])


        <h6 class="text-primary">Obsgyn</h6> 

		<div class="form-group">
			<label class="label">Operator</label>
			<input type="text" class="form-control" name="intra_operative__obsgyn_operator" value="{{$kasus->operative_intra->obsgyn_operator ?? ''}}">
		</div>

		<div class="form-group">
			<label class="label">Action</label>
			<input type="text" class="form-control" name="intra_operative__obsgyn_action" value="{{$kasus->operative_intra->obsgyn_action ?? ''}}">
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