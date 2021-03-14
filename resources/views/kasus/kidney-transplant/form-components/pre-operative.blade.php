<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">PRE OPERATIVE</h1>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<h6 style="font-weight: 600" class="text-primary">RECEPIENT DATA</h6>
		<div class="form-group">
			<label class="label">Patient Status</label><br>
			<div class="form-check-inline">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="pre_operative__recepient_status_pasien" checked value="lama">Old Patient
				</label>
			</div>
			<div class="form-check-inline">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="pre_operative__recepient_status_pasien" value="baru" >New Patient
				</label>
			</div>
		</div>
		<div class="form-group form-group-lama">
			<label class="label">Search Patient</label><br>
			<select class="form-control js-select2 select-pasien" data-trigger name="pre_operative__recepient_pasien_id">
				<option disabled selected>Search Patient</option>
				@foreach($pasien as $px)
				<option value="{{$px->id}}">#{{$px->no_rm}} - {{$px->nama}} - {{strtoupper($px->jenis_kelamin == 'lk' ? 'Man' : 'Woman')}} - {{$px->age}}</option>
				@endforeach
			</select>
		</div>
		<hr style="width: 100%">
		<div class="row form-pasien">
			<div class="col-12 mb-3">Patient Data</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">ID</label>
					<input type="text" class="form-control" name="pre_operative__recepient_pasien_id" readonly>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">Medical Record</label>
					<input type="text" class="form-control" name="pre_operative__recepient_pasien_no_rm">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">Patient Name</label>
					<input type="text" class="form-control" name="pre_operative__recepient_pasien_nama" required="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">Date of Birth</label>
					<input type="date" class="form-control" name="pre_operative__recepient_pasien_tanggal_lahir" required="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">Gender</label><br>
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="pre_operative__recepient_pasien_jenis_kelamin" checked value="lk" id="input-radio-px-jk-lk">Man
						</label>
					</div>
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="pre_operative__recepient_pasien_jenis_kelamin" value="pr" id="input-radio-px-jk-pr">Woman
						</label>
					</div>

				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">Phone Number</label>
					<input type="text" class="form-control" name="pre_operative__recepient_pasien_nomor_telpon">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">Weight (kg)</label>
					<input type="number" class="form-control" name="pre_operative__recepient_pasien_tb">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="form-group">
					<label class="label">Height (cm)</label>
					<input type="number" class="form-control" name="pre_operative__recepient_pasien_bb">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
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