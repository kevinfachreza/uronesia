<div class="row">
    <div class="col-12">
        <h4 class="display-4">INTRA OPERATIVE</h4>
        <h6 style="font-weight: 600" class="text-primary">Operator</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Donor</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->operator_donor ?? ''}}</td>
            </tr>
            <tr>
                <td>Recipient</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->operator_recipient ?? ''}}</td>
            </tr>
        </table>

        <h5>Surgical Technique</h5>
        <h6 style="font-weight: 600" class="text-primary">Donor</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Kidney</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->donor_kidney ?? ''}}</td>
            </tr>
            <tr>
                <td>Open - Transperitoneal</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->donor_open_transperitoneal ?? ''}}</td>
            </tr>
            <tr>
                <td>Open - Extraperitoneal</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->donor_open_extraperitoneal ?? ''}}</td>
            </tr>
            <tr>
                <td>Laparoscopic - Transperitoneal</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->donor_laparoscopic_transperitoneal ?? ''}}</td>
            </tr>
            <tr>
                <td>Laparoscopic - Extraperitoneal</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->donor_laparoscopic_extraperitoneal ?? ''}}</td>
            </tr>
            <tr>
                <td>Robotic - Transperitoneal</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->donor_robotic_transperitoneal ?? ''}}</td>
            </tr>
            <tr>
                <td>Robotic - Extraperitoneal</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->donor_robotic_extraperitoneal ?? ''}}</td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Recipient</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Kidney</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->donor_kidney ?? ''}}</td>
            </tr>
            <tr>
                <td>Technique</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->recipient_technique) ?? ''}}</td>
            </tr>
            <tr>
                <td>Iliaca Externa</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->recipient_iliaca_externa ?? ''}}</td>
            </tr>
            <tr>
                <td>Iliaca Interna</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->recipient_iliaca_interna ?? ''}}</td>
            </tr>
            <tr>
                <td>Anastomosis - End to End</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->recipient_anastomosis_end_to_end ?? ''}}</td>
            </tr>
            <tr>
                <td>Anastomosis - End to Side</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->recipient_anastomosis_end_to_side ?? ''}}</td>
            </tr>
            <tr>
                <td>Anastomosis - Side to Side</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->recipient_anastomosis_side_to_side ?? ''}}</td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Ureteral Implantation</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Extravesical</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->urethral_implantation_extravesical ?? ''}}</td>
            </tr>
            <tr>
                <td>Intravesical</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->urethral_implantation_intravesical ?? ''}}</td>
            </tr>
            <tr>
                <td>Others</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->urethral_implantation_others ?? ''}}</td>
            </tr>
        </table>


        <h6 style="font-weight: 600" class="text-primary">Time Operation</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Ischaemic Time - Warm 1</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->time_operation_ischaemic_time_warm_1 ?? ''}}</td>
            </tr>
            <tr>
                <td>Ischaemic Time - Cold</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time_operation_ischaemic_time_cold ?? ''}}</td>
            </tr>
            <tr>
                <td>Ischaemic Time - Warm 2</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time_operation_ischaemic_time_warm_2 ?? ''}}</td>
            </tr>
            <tr>
                <td>Ischaemic Time - Total Time</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time_operation_total ?? ''}}</td>
            </tr>
        </table>

        <h6 style="font-weight: 600" class="text-primary">Solution</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Immersed</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->solution_immersed ?? ''}}</td>
            </tr>
            <tr>
                <td>Flushed</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->solution_flushed ?? ''}}</td>
            </tr>
        </table>
        <hr>
        
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Size DJ Stent</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->dj_stent_size ?? ''}}</td>
            </tr>
            <tr>
                <td>Blood Loss (cc)</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->blood_loss ?? ''}}</td>
            </tr>
            <tr>
                <td>Blood Transfusion (Kolf)</td>
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
                $files_title[] = 'Clinical Picture';
                $files_names[] = 'intra-operative-clinical'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>