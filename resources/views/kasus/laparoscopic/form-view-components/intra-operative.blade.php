<div class="row">
    <div class="col-12">
        <h4 class="display-4">INTRA OPERATIVE</h4>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Operator</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->operator ?? ''}}</td>
            </tr>
            <tr>
                <td>Port Size</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->port_size ?? ''}}</td>
            </tr>
            <tr>
                <td>Port Number</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->port_number ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Operation Time</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Porting</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->time_operation_porting ?? ''}}</td>
            </tr>
            <tr>
                <td>Operation</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time ?? ''}}</td>
            </tr>
            <tr>
                <td>Total Time</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time_operation_total ?? ''}}</td>
            </tr>
            <tr>
                <td>Warm Ishemic Time</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time_operation_ischaemic_time_warm_1 ?? ''}}</td>
            </tr>
        </table>

        <hr> 

        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Site</td>
                <td style="width: 10px">:</td>
                <td>{{unslugify($kasus->operative_intra->operation_site ?? '')}}</td>
            </tr>
            <tr>
                <td>DJ Stent</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_intra->dj_stent ?? '')}}</td>
            </tr>
            <tr>
                <td>Blood Loss (cc)</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->blood_loss ?? ''}}</td>
            </tr>
            <tr>
                <td>Blood Transfusin (Kolf)</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->blood_transfusion ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>


<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'Intra Operative Finding';
                $files_names[] = 'intra-operative-finding'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h6 style="font-weight: 600" class="text-primary">Complication</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Is Complication</td>
                <td style="width: 10px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_intra->complication ?? '')}}</td>
            </tr>
            @php $value = $kasus->operative_intra->complication ?? '' @endphp
            @if($value == 1)
            <tr>
                <td>Description</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->complication_desc ?? ''}}</td>
            </tr>
            @endif
        </table>


        <h6 style="font-weight: 600" class="text-primary">Failed Procedure</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Is Failed Procedure</td>
                <td style="width: 10px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_intra->failed_procedure ?? '')}}</td>
            </tr>
            @php $value = $kasus->operative_intra->failed_procedure ?? '' @endphp
            @if($value == 1)
            <tr>
                <td>Cause</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->failed_procedure_cause ?? ''}}</td>
            </tr>
            <tr>
                <td>Open Conversion</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->failed_procedure_open_conversion ?? ''}}</td>
            </tr>
            @endif
        </table>
    </div>
</div>