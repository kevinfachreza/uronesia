<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Physical Examination</h5>
            </div>
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">RENAL</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_mass ?? '','label'=>'Mass','name'=>'physical_exam__renal_mass','options' => ['Right','Left','Both']])
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_size ?? '','label'=>'Size','name'=>'physical_exam__renal_size','options' => ['Right','Left','Both']])
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_solid ?? '','label'=>'Solid','name'=>'physical_exam__renal_solid','options' => ['Right','Left','Both']])
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_cystic ?? '','label'=>'Cystic','name'=>'physical_exam__renal_cystic','options' => ['Right','Left','Both']])
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_mobile ?? '','label'=>'Mobile','name'=>'physical_exam__renal_mobile','options' => ['Right','Left','Both']])
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_fixed ?? '','label'=>'Fixed','name'=>'physical_exam__renal_fixed','options' => ['Right','Left','Both']])
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->renal_pain ?? '','label'=>'Pain','name'=>'physical_exam__renal_pain','options' => ['Right','Left','Both']])
            </div>
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Bladder</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->bladder_full ?? '','label'=>'Full','name'=>'physical_exam__bladder_full',])
            </div>
            <div class="col-12">
                <div class="form-group">
                    @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->bladder_mass ?? '','label'=>'MASS','name'=>'physical_exam__bladder_mass',])
                </div>
            </div>
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Penis</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->penis_circumcision ?? '','label'=>'Circumcision','name'=>'physical_exam__penis_circumcision',])
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-yes-no',['default'=> $kasus->physical_exam->penis_mass ?? '','label'=>'MASS','name'=>'physical_exam__penis_mass',])
            </div>


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Right Testis</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_right_size_normal ?? '','label'=>'Size','name'=>'physical_exam__testes_right_size_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__testes_right_size_text" value="{{$kasus->physical_exam->testes_right_size_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_right_consistency_normal ?? '','label'=>'Consistency','name'=>'physical_exam__testes_right_consistency_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__testes_right_consistency_text" value="{{$kasus->physical_exam->testes_right_consistency_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_right_hydrocele ?? '','label'=>'Hydrocele','name'=>'physical_exam__testes_right_hydrocele','options' => ['Yes','No']])
            </div>

             <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Left Testis</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_left_size_normal ?? '','label'=>'Size','name'=>'physical_exam__testes_left_size_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__testes_left_size_text" value="{{$kasus->physical_exam->testes_left_size_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_left_consistency_normal ?? '','label'=>'Consistency','name'=>'physical_exam__testes_left_consistency_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__testes_left_consistency_text" value="{{$kasus->physical_exam->testes_left_consistency_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->testes_left_hydrocele ?? '','label'=>'Hydrocele','name'=>'physical_exam__testes_left_hydrocele','options' => ['Yes','No']])
            </div>


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Right Inguinal Gland</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->inguinal_gland_right_size_normal ?? '','label'=>'Size','name'=>'physical_exam__inguinal_gland_right_size_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__inguinal_gland_right_size_text" value="{{$kasus->physical_exam->inguinal_gland_right_size_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->inguinal_gland_right_fixed_normal ?? '','label'=>'Fixed','name'=>'physical_exam__inguinal_gland_right_fixed_normal','options' => ['Yes','No']])
            </div>


            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Left Inguinal Gland</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->inguinal_gland_left_size_normal ?? '','label'=>'Size','name'=>'physical_exam__inguinal_gland_left_size_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__inguinal_gland_left_size_text" value="{{$kasus->physical_exam->inguinal_gland_left_size_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->inguinal_gland_left_fixed_normal ?? '','label'=>'Fixed','name'=>'physical_exam__inguinal_gland_left_fixed_normal','options' => ['Yes','No']])
            </div>
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Right Supraclavicula Gland</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->superclavicula_gland_right_size_normal ?? '','label'=>'Size','name'=>'physical_exam__superclavicula_gland_right_size_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__superclavicula_gland_right_size_text" value="{{$kasus->physical_exam->superclavicula_gland_right_size_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->superclavicula_gland_right_fixed ?? '','label'=>'Fixed','name'=>'physical_exam__superclavicula_gland_right_fixed','options' => ['Yes','No']])
            </div>

            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Left Supraclavicula Gland</h6>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->superclavicula_gland_left_size_normal ?? '','label'=>'Size','name'=>'physical_exam__superclavicula_gland_left_size_normal','options' => ['Normal','Abnormal']])
            </div>
            <div class="col-12" style="display: none">
                <div class="form-group">
                    <label class="label">Description</label>
                    <input type="text" class="form-control" name="physical_exam__superclavicula_gland_left_size_text" value="{{$kasus->physical_exam->superclavicula_gland_left_size_text ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                @include('kasus.components-form.radio-button-multi-opsi',['default'=> $kasus->physical_exam->superclavicula_gland_left_fixed ?? '','label'=>'Fixed','name'=>'physical_exam__superclavicula_gland_left_fixed','options' => ['Yes','No']])
            </div>
            <div class="col-12">
                <h6 style="font-weight: 600" class="text-primary">Prostate</h6>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Weight (Gr)</label>
                    <input type="text" class="form-control" name="physical_exam__prostate_weight" value="{{$kasus->physical_exam->prostate_weight ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Surface</label>
                    <input type="text" class="form-control" name="physical_exam__prostate_surface" value="{{$kasus->physical_exam->prostate_surface ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Consistency</label>
                    <input type="text" class="form-control" name="physical_exam__prostate_consistency" value="{{$kasus->physical_exam->prostate_consistency ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Pain</label>
                    <input type="text" class="form-control" name="physical_exam__prostate_pain" value="{{$kasus->physical_exam->prostate_pain ?? ''}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="label">Nodul</label>
                    <input type="text" class="form-control" name="physical_exam__prostate_nodul" value="{{$kasus->physical_exam->prostate_nodul ?? ''}}">
                </div>
            </div>

        </div>
    </div>
</div>