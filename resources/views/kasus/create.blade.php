@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <h4 style="text-transform: capitalize;">Buat Kasus Baru {{$jenis_display}} </h4>
            <hr>
            <form method="POST" action="{{url('kasus')}}/baru">
                {{csrf_field()}}
                <input type="hidden" name="jenis_kasus" value="{{$jenis}}">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="label">Status Pasien</label><br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status_pasien" checked value="lama">Lama
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status_pasien" value="baru" >Baru
                                </label>
                            </div>
                        </div>
                        <div class="form-group form-group-lama">
                            <label class="label">Cari Pasien</label><br>
                            <select class="form-control js-select2 select-pasien" data-trigger name="pasien_id">
                                <option disabled selected>Cari Pasien</option>
                                @foreach($pasien as $px)
                                <option value="{{$px->id}}">#{{$px->no_rm}} - {{$px->nama}} - {{strtoupper($px->jenis_kelamin)}} - {{$px->age}}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr style="width: 100%">
                        <div class="row form-pasien" style="display: none">
                            <div class="col-12 mb-3">DATA PASIEN</div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">ID PASIEN</label>
                                    <input type="text" class="form-control" name="pasien_id" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">No RM</label>
                                    <input type="text" class="form-control" name="pasien_no_rm">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">Nama Pasien</label>
                                    <input type="text" class="form-control" name="pasien_nama" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="pasien_tanggal_lahir" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">Jenis Kelamin</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="pasien_jenis_kelamin" checked value="lk" id="input-radio-px-jk-lk">Laki Laki
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="pasien_jenis_kelamin" value="pr" id="input-radio-px-jk-pr">Perempuan
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">Nomor Telpon</label>
                                    <input type="text" class="form-control" name="pasien_nomor_telpon">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">Tinggi Badan (kg)</label>
                                    <input type="number" class="form-control" name="pasien_tb">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="label">Berat Badan (cm)</label>
                                    <input type="number" class="form-control" name="pasien_bb">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Buat Kasus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('input[type=radio][name=status_pasien]').change(function() {
        if (this.value == 'lama') {
            $(".form-group-lama").show()
            if(checkIfFormPasienEmpty())
            {
                confirm("Data pasien yang telah terisi akan hilang");
                formPasienReset();
            }
            $('.form-pasien').hide()
        }
        else if (this.value == 'baru') {
            formPasienReset();
            $(".form-group-lama").hide()
            $('.form-pasien').show()
        }
    });

    function checkIfFormPasienEmpty()
    {
        var no_rm = $('input[name=pasien_no_rm]').val();
        var nama = $('input[name=pasien_nama]').val();

        if(no_rm == '' && nama == '') return 0;
        else return 1; 
    }

    function formPasienReset()
    {
        $('input[name=pasien_no_rm]').val('');
        $('input[name=pasien_nama]').val('');
        $('input[name=pasien_tanggal_lahir]').val('');
        $("input[name=pasien_jenis_kelamin][value=lk]").prop('checked', true);
        $('input[name=pasien_id]').val('');
        $('input[name=pasien_nomor_telpon]').val('');
        $('input[name=pasien_tb]').val('');
        $('input[name=pasien_bb]').val('');
    }

    $('.select-pasien').on('change', function() {
        var val = $(".select-pasien option:selected").val();
        $.ajax({
            type: "GET",
            url: "{{url('api/pasien/get')}}/"+val,
            cache: false,
            dataType: 'json',
            tryCount : 0,
            retryLimit : 3,
            success: function(response){

                $('input[name=pasien_id]').val(response.id);
                $('input[name=pasien_no_rm]').val(response.no_rm);
                $('input[name=pasien_nama]').val(response.nama);
                $('input[name=pasien_tanggal_lahir]').val(response.tanggal_lahir);
                $("input[name=pasien_jenis_kelamin][value=" + response.jenis_kelamin + "]").prop('checked', true);
                $('input[name=pasien_nomor_telpon]').val(response.nomor_telpon);
                $('input[name=pasien_tb]').val(response.tb);
                $('input[name=pasien_bb]').val(response.bb);
                $('.form-pasien').show()

            },
            error : function(xhr, textStatus, errorThrown ) {
                if (textStatus == 'timeout') {
                    this.tryCount++;
                    if (this.tryCount <= this.retryLimit) {
                        $.ajax(this);
                        return;
                    }            
                    return;
                }
                if (xhr.status == 500) {
                    swal('error','Silahkan Refresh dan Coba lagi')
                } else {
                    swal('error','Silahkan Refresh dan Coba lagi')
                }
            }

        });

    })
</script>
@endsection
