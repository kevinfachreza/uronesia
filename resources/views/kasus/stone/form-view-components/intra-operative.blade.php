<div class="row">
    <div class="col-12">
        <h4 class="display-4">INTRA OPERATIVE</h4>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Operator</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->operator ?? ''}}</td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->surgical_technique_position ?? '') ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="3"><h4 class="mb-0">Surgical Technique</h4></td>
            </tr>
            <tr>
                <td>Open</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->surgical_technique_is_open ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                    @if($value == 1) ({{$kasus->operative_intra->surgical_technique_open_desc}}) @endif
                </td>
            </tr>
            <tr>
                <td colspan="3"><h5 class="mb-0">PCNL</h5></td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->pcnl_pos ?? '') ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="3"><strong class="text-primary">Operation Time</strong></td>
            </tr>
            <tr>
                <td>Cystoscopy</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->pcnl_time_cystocopy ?? ''}} Minutes</td>
            </tr>
            <tr>
                <td>Puncture</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->pcnl_time_puncture ?? ''}} Minutes</td>
            </tr>
            <tr>
                <td>Dilatation</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->pcnl_time_dilatation ?? ''}} Minutes</td>
            </tr>
            <tr>
                <td>Lithotripsi</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->pcnl_time_lithotripsi ?? ''}} Minutes</td>
            </tr>
            <tr>
                <td>DJ Stent</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->pcnl_time_dj_stent ?? ''}} Minutes</td>
            </tr>
            <tr>
                <td>Nefrostomy</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->pcnl_time_nefrostomy ?? ''}} Minutes</td>
            </tr>
            <tr>
                <td>Total Time</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->pcnl_time_total_time ?? ''}} Minutes</td>
            </tr>
            <tr>
                <td colspan="3"><strong class="text-primary">Puncture</strong></td>
            </tr>
            <tr>
                <td>Below Costa 12</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->pcnl_puncture_below_costa_12 ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Above Costa 12</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->pcnl_puncture_above_costa_12 ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Above Costa 11</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->pcnl_puncture_above_costa_11 ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Site</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->pcnl_puncture_type ?? '')}}
                </td>
            </tr>
            <tr>
                <td>Multi Puncture</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->pcnl_puncture_multi ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td colspan="3"><strong class="text-primary">Dilatation</strong></td>
            </tr>

            <tr>
                <td>Site</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->pcnl_dilatation_type ?? '')}}
                </td>
            </tr>
            <tr>
                <td>Number Amplatz</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->pcnl_dilatation_number ?? ''}} Fr
                </td>
            </tr>
        </table>
        <hr>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">RIRS</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $value = $kasus->operative_intra->surgical_technique_rirs ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>URS</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->surgical_technique_urs ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Laparoscopic</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->surgical_technique_laparoscopic ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Vesicolithotripsi</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->surgical_vesico ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Liithotripsi Urethral stone</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->surgical_lithotripsi ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Time</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->time ?? '0'}} Minutes
                </td>
            </tr>
        </table> 
        <hr>
        <h6 class="text-primary">Fluoroscopy</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Fluoroscopy</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $value = $kasus->operative_intra->fluoroscopy_is ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            @if($value == 1)
            <tr>
                <td>Time</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->fluoroscopy_time ?? ''}}
                </td>
            </tr>
            @endif
        </table>
    </div>
</div>


@if($value == 1)
<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
            $files_title[] = 'Intra Ops';
            $files_title[] = 'Post Ops';

            $files_names[] = 'fluoroscopy-intra'; 
            $files_names[] = 'fluoroscopy-post'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Stone Fragmentation</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Pneumatic</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $value = $kasus->operative_intra->stone_frag_pneumatic ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Ultrasound</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->stone_frag_ultrasound ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Laser</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->stone_frag_laser ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Lowsley</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->stone_frag_lowsley ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Stone Punch</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->stone_frag_stone_punch ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Hendrikson</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->stone_frag_hendrikson ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>No</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->stone_frag_no ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Complication</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Complication</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $value = $kasus->operative_intra->complication ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            @if($value == 1)
            <tr>
                <td>Perforation</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->complication_perf_desc ?? ''}}</td>
            </tr>
            <tr>
                <td>Intestinal Perforation</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->complication_intestinal_perf_desc ?? ''}}</td>
            </tr>
            <tr>
                <td>Hydrothorax</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->complication_hydrothorax ?? ''}}</td>
            </tr>
            @endif
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Blood Data</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Bleeding</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->operative_intra->blood_loss ?? ''}} cc </td>
            </tr>
            <tr>
                <td>Transfusion</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->blood_transfusion ?? ''}} kolf</td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Failed Procedure</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Is Failed Procedure</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $value = $kasus->operative_intra->failed_procedure ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
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

<div class="row">
    <div class="col-12">
        <h6 class="text-primary">Rest Stone</h6>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Rest Stone</td>
                <td style="width: 5px">:</td>
                <td>
                    @php $value = $kasus->operative_intra->rest_stone_is ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            @if($value == 1)
            <tr>
                <td>Site</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->rest_stone_type ?? '')}}</td>
            </tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->rest_stone_size ?? ''}}</td>
            </tr>
            <tr>
                <td>Plan</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->rest_stone_plan ?? ''}}</td>
            </tr>
            @endif
        </table>
    </div>
</div>

@if($value == 1)
<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
            $files_title = [];
            $files_names = [];

            $files_title[] = 'Rest Stone Clinical Picture';
            $files_names[] = 'rest-stone-clinical-picture'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>
@endif