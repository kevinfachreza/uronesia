<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATION</h1>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Operation Date</label>
            <input type="date" class="form-control" name="tanggal_operasi" value="{{$kasus->tanggal_operasi}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Length of Stay (days)</label>
            <input type="number" class="form-control" name="lama_perawatan_hari" value="{{$kasus->lama_perawatan_hari}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Diagnosis</label>
            <input type="text" class="form-control" name="diagnosis" value="{{$kasus->diagnosis}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Comorbid</label>
            <input type="text" class="form-control" name="komorbid" value="{{$kasus->komorbid}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Case</label>
            <select class="form-control" name="is_kasus_baru">
                <option value="0" @if($kasus->is_kasus_baru == 0) selected @endif>Redo</option>
                <option value="1" @if($kasus->is_kasus_baru == 1) selected @endif>New</option>
            </select>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Surgical History</label>
            <input type="text" class="form-control" name="riwayat_operasi" value="{{$kasus->riwayat_operasi}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Radiology Result</label>
            <input type="text" class="form-control" name="penunjang_radiologi" value="{{$kasus->penunjang_radiologi}}">
        </div>
    </div>
    <div class="col-12">
        <h5>Radiology Pictures</h5>
        <input type="file" name="file_radiology[]">
        <div id="foto-klinis-radiology-container">
        </div>
        <button class="btn btn-info btn-sm mt-3"  type="button"  id="foto-klinis-radiology-add"><i class="fa fa-plus"></i> Add Photo</button>
    </div>
    <div class="col-12 mt-2">
        <div class="row">
            @foreach($kasus->penunjang_radiology as $penunjang)
            <div class="col-lg-2 col-md-4 col-6">
                <div style="border:solid 1px #eee; text-align: center;height: 100px">
                    <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">

                </div>
                <div class="form-group mt-1">
                    <select class="form-control" name="kasus_penunjang_delete[{{$penunjang->id}}]">
                        <option value="0">Keep Picture</option>
                        <option value="1">Delete</option>
                    </select>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h4>Laboratory Result</h4>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">HB</label>
                    <input type="text" class="form-control" name="penunjang_lab_hb" value="{{$kasus->penunjang_lab_hb}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">HT</label>
                    <input type="text" class="form-control" name="penunjang_lab_ht" value="{{$kasus->penunjang_lab_ht}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">L</label>
                    <input type="text" class="form-control" name="penunjang_lab_l" value="{{$kasus->penunjang_lab_l}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">TR</label>
                    <input type="text" class="form-control" name="penunjang_lab_tr" value="{{$kasus->penunjang_lab_tr}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">UR</label>
                    <input type="text" class="form-control" name="penunjang_lab_ur" value="{{$kasus->penunjang_lab_ur}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">CR</label>
                    <input type="text" class="form-control" name="penunjang_lab_cr" value="{{$kasus->penunjang_lab_cr}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Bacteria</label>
                    <input type="text" class="form-control" name="penunjang_lab_bacteria" value="{{$kasus->penunjang_lab_bacteria}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Sensitive</label>
                    <input type="text" class="form-control" name="penunjang_lab_sensitive" value="{{$kasus->penunjang_lab_sensitive}}">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="label">Urine Culture - Resistance</label>
                    <input type="text" class="form-control" name="penunjang_lab_resistance" value="{{$kasus->penunjang_lab_resistance}}">
                </div>
            </div>
        </div>
    </div>
</div>