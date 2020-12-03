<div class="row">
    <div class="col-12">
        <hr style="width: 100%">
        <h1 class="display-4">PRE OPERATIVE</h1>
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
    
</div>