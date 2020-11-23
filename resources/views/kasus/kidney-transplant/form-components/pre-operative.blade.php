<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">PRE OPERATIVE</h1>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">Donor Relationship</label>
			<input type="text" class="form-control" name="pre_operative__donor_relationship" value="{{$kasus->operative_pre->donor_relationship ?? ''}}">
		</div>
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
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_depression ?? '','label'=>'Depression','name'=>'pre_operative__comorbid_depression'])
	</div>
	<div class="col-12">
		@include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->operative_pre->comorbid_renal ?? '','label'=>'Renal','name'=>'pre_operative__comorbid_renal'])
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
	<div class="col-12">
		<div class="form-group">
			<label class="label">Cardiac Functional (LVEF)</label>
			<input type="text" class="form-control" name="pre_operative__cardiac_functional" value="{{$kasus->operative_pre->cardiac_functional ?? ''}}">
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
                    <label class="label">Leucocyte</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_leucocyte" value="{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Platelets</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_trombocyte" value="{{$kasus->penunjang_lab_pre->lab_trombocyte ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Ureum</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_ur" value="{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Creatinine</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cr" value="{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Na</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_na" value="{{$kasus->penunjang_lab_pre->lab_na ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">K</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_k" value="{{$kasus->penunjang_lab_pre->lab_k ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Cl</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cl" value="{{$kasus->penunjang_lab_pre->lab_cl ?? ''}}">
                </div>
            </div>



            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Culture</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Blood</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cult_blood" value="{{$kasus->penunjang_lab_pre->lab_cult_blood ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cult_urine" value="{{$kasus->penunjang_lab_pre->lab_cult_urine ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Drain</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__lab_cult_drain" value="{{$kasus->penunjang_lab_pre->lab_cult_drain ?? ''}}">
                </div>
            </div>

            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Total Vessels Donor Ren Dextra</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Artery</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__vessels_donor_ren_dex_artery" value="{{$kasus->penunjang_lab_pre->vessels_donor_ren_dex_artery ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Vein</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__vessels_donor_ren_dex_vein" value="{{$kasus->penunjang_lab_pre->vessels_donor_ren_dex_vein ?? ''}}">
                </div>
            </div>


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Total Vessels Donor Ren Sinistra</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Artery</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__vessels_donor_ren_sin_artery" value="{{$kasus->penunjang_lab_pre->vessels_donor_ren_sin_artery ?? ''}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Vein</label>
                    <input type="text" class="form-control" name="penunjang_lab_pre__vessels_donor_ren_sin_vein" value="{{$kasus->penunjang_lab_pre->vessels_donor_ren_sin_vein ?? ''}}">
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
				$files_title[] = 'CT';
				$files_title[] = 'MRI';

				$files_names[] = 'radiology-pre-ct'; 
				$files_names[] = 'radiology-pre-mri'; 
			@endphp 

			@foreach($files_title as $index => $title)
				@include('kasus.components-form.file-uploader',['title'=>$title,'slug'=>$files_names[$index]])
			@endforeach
			
			
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-12">
		<div class="form-group">
			<label class="label">Donor Renogram</label>
			<input type="text" class="form-control" name="pre_operative__donor_renogram" value="{{$kasus->operative_pre->donor_renogram ?? ''}}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label class="label">CKD Etiology</label>
			<input type="text" class="form-control" name="pre_operative__ckd_etiology" value="{{$kasus->operative_pre->ckd_etiology ?? ''}}">
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">HLA</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="pre_operative__hla_donor" value="{{$kasus->operative_pre->hla_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="pre_operative__hla_recipient" value="{{$kasus->operative_pre->hla_recipient ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Result</label>
			<input type="text" class="form-control" name="pre_operative__hla_result" value="{{$kasus->operative_pre->hla_result ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Crossmatch</label>
			<input type="text" class="form-control" name="pre_operative__hla_crossmatch" value="{{$kasus->operative_pre->hla_crossmatch ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">HCV</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="pre_operative__hcv_donor" value="{{$kasus->operative_pre->hcv_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="pre_operative__hcv_recipient" value="{{$kasus->operative_pre->hcv_recipient ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">CMV</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="pre_operative__cmv_donor" value="{{$kasus->operative_pre->cmv_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="pre_operative__cmv_recipient" value="{{$kasus->operative_pre->cmv_recipient ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">HIV</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="pre_operative__hiv_donor" value="{{$kasus->operative_pre->hiv_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="pre_operative__hiv_recipient" value="{{$kasus->operative_pre->hiv_recipient ?? ''}}">
		</div>
	</div>


	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">HbsAg</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="pre_operative__hbsag_donor" value="{{$kasus->operative_pre->hbsag_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="pre_operative__hbsag_recipient" value="{{$kasus->operative_pre->hbsag_recipient ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">Toxoplasma</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="pre_operative__toxoplasma_donor" value="{{$kasus->operative_pre->toxoplasma_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="pre_operative__toxoplasma_recipient" value="{{$kasus->operative_pre->toxoplasma_recipient ?? ''}}">
		</div>
	</div>

	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">IGRA</h6>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Donor</label>
			<input type="text" class="form-control" name="pre_operative__igra_donor" value="{{$kasus->operative_pre->igra_donor ?? ''}}">
		</div>
	</div>
	<div class="col-6">
		<div class="form-group">
			<label class="label">Recipient</label>
			<input type="text" class="form-control" name="pre_operative__igra_recipient" value="{{$kasus->operative_pre->igra_recipient ?? ''}}">
		</div>
	</div>
</div>