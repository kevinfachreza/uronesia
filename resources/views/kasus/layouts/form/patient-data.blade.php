<div class="row">
    <div class="col-12">
        <h4  class="display-4">PATIENTS DATA</h4>
        <table class="table table-no-border">
            <tr>
                <td style="width: 100px">MEDICAL RECORD</td>
                <td>:</td>
                <td>{{$kasus->pasien->no_rm}}</td>
            </tr>
            <tr>
                <td>NAME</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->pasien->nama}}</td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>:</td>
                <td>{{$kasus->pasien->jenis_kelamin == 'lk' ? 'Man' : 'Woman'}}</td>
            </tr>
            <tr>
                <td>AGE (Years)</td>
                <td>:</td>
                <td>{{$kasus->pasien->age}}</td>
            </tr>
        </table>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Height (cm)</label>
            <input type="number" class="form-control" name="tb" value="{{$kasus->tb}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="form-group">
            <label class="label">Weight (kg)</label>
            <input type="number" class="form-control" name="bb" value="{{$kasus->bb}}">
        </div>
    </div>
</div>