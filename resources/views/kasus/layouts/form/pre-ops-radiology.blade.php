<div class="row">
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
</div>