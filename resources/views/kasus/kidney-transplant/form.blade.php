@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Kidney Transplant Case</h4>
            <hr>
            <form method="POST" action="{{url('kasus/kidney-transplant')}}/{{$kasus->id}}/save" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('kasus.layouts.form.patient-data')
                @include('kasus.kidney-transplant.form-components.pre-operative')
                @include('kasus.kidney-transplant.form-components.intra-operative')
                @include('kasus.kidney-transplant.form-components.post-operative')

                <div class="row mt-5">
                    <div class="col-12">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
$('input[name=anamnesis__history_of_urinarytract_stone]').change(function(){
    changeAnamnesisHistoryUrineStone(value)
})
function changeAnamnesisHistoryUrineStone(value)
{
    if(value == 1) $('input[name=anamnesis__history_of_urinarytract_stone_location]').parent().parent().show()
    else $('input[name=anamnesis__history_of_urinarytract_stone_location]').parent().parent().hide()
}

$('select[name=main_complaint_pain_location]').change(function(){
    value = $(this).val();
    if(value == 'other') $('input[name=main_complaint_pain_location_others]').parent().parent().show()
    else $('input[name=main_complaint_pain_location_others]').parent().parent().hide()
})



$('select[name=main_complaint_pain_location]').trigger('change');

@php $photo_slugs = ['radiology-pre-ct','radiology-pre-mri','radiology-post-ct','radiology-post-mri','intra-operative-clinical','post-operative-bno'] @endphp

@foreach($photo_slugs as $slug)
@php $slug_kebab = str_replace("-","_",$slug); @endphp
$('#foto-{{$slug}}-add').click(function(){
    var file_input = `<div class="mt-2"><input type="file" name="file__{{$slug_kebab}}[]"></div>`
    $('#foto-{{$slug}}-container').append(file_input)
})
@endforeach


$('input[name=post_operative__death]').change(function(){
    changePostOpsDeath(value)
})

function changePostOpsDeath(value)
{
    if(value == 1) $('input[name=post_operative__death_cause]').parent().parent().show()
    else $('input[name=post_operative__death_cause]').parent().parent().hide()
}

$('input[name=post_operative__complication]').change(function(){
    changePostOpsComplication(value)
})

function changePostOpsComplication(value)
{
    console.log(value)
    if(value == 1) 
    {
        $('input[name=post_operative__complication_action]').parent().parent().show()
        $('input[name=post_operative__complication_cause]').parent().parent().show()
    }
    else 
    {
        $('input[name=post_operative__complication_action]').parent().parent().hide()
        $('input[name=post_operative__complication_cause]').parent().parent().hide()
    }
}



changePostOpsDeath('{{$kasus->operative_post->death ?? ''}}')
changePostOpsComplication('{{$kasus->operative_post->complication ?? ''}}')
changeAnamnesisHistoryUrineStone('{{$kasus->anamnesis->history_of_urinarytract_stone ?? ''}}')


</script>


<script type="text/javascript">
    $('input[type=radio][name=pre_operative__recepient_status_pasien]').change(function() {
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
        var no_rm = $('input[name=pre_operative__recepient_pasien_no_rm]').val();
        var nama = $('input[name=pre_operative__recepient_pasien_nama]').val();

        if(no_rm == '' && nama == '') return 0;
        else return 1; 
    }

    function formPasienReset()
    {
        $('input[name=pre_operative__recepient_pasien_no_rm]').val('');
        $('input[name=pre_operative__recepient_pasien_nama]').val('');
        $('input[name=pre_operative__recepient_pasien_tanggal_lahir]').val('');
        $("input[name=pre_operative__recepient_pasien_jenis_kelamin][value=lk]").prop('checked', true);
        $('input[name=pre_operative__recepient_pasien_id]').val('');
        $('input[name=pre_operative__recepient_pasien_nomor_telpon]').val('');
        $('input[name=pre_operative__recepient_pasien_tb]').val('');
        $('input[name=pre_operative__recepient_pasien_bb]').val('');
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

                $('input[name=pre_operative__recepient_pasien_id]').val(response.id);
                $('input[name=pre_operative__recepient_pasien_no_rm]').val(response.no_rm);
                $('input[name=pre_operative__recepient_pasien_nama]').val(response.nama);
                $('input[name=pre_operative__recepient_pasien_tanggal_lahir]').val(response.tanggal_lahir);
                $("input[name=pre_operative__recepient_pasien_jenis_kelamin][value=" + response.jenis_kelamin + "]").prop('checked', true);
                $('input[name=pre_operative__recepient_pasien_nomor_telpon]').val(response.nomor_telpon);
                $('input[name=pre_operative__recepient_pasien_tb]').val(response.tb);
                $('input[name=pre_operative__recepient_pasien_bb]').val(response.bb);
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

    if("{{$kasus->operative_pre->recepient_pasien_id ?? ''}}" != '')
    {
        $('.select-pasien').val('{{$kasus->operative_pre->recepient_pasien_id ?? ''}}').trigger('change')
    }
    
</script>
@endsection
