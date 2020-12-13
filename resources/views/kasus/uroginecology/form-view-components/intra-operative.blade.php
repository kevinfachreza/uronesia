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
                <td colspan="3"><h5>Consultation /Joint Operation</h5></td>
            </tr>
            <tr>
                <td>Urethro Sistoscopy Diagnostic</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->urethro_sistocopy_diagnosis ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Bladder Mucosa Biopsy</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->bladder_mucosa_biopsy ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>RPG</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->rpg_pos ?? '')}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="text-primary mt-2 mb-0">DJ Stent</h6> 
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->dj_stent_pos ?? '')}}
                </td>
            </tr>
            <tr>
                <td>Duration</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->dj_stent_duration ?? '')}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="text-primary mt-2 mb-0">Ureter Cath</h6> 
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->ureter_cath ?? '')}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="text-primary mt-2 mb-0">Nefrostomy</h6> 
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->nefrostomy_type ?? '')}}
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->nefrostomy_pos ?? '')}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="text-primary mt-2 mb-0">Trauma</h6> 
                </td>
            </tr>
            <tr>
                <td>Ureter</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->trauma_ureter ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Bladder</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->trauma_bladder ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Urethra</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->trauma_urethra ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Action</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->trauma_action ?? ''}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="text-primary mt-2 mb-0">Identification</h6> 
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->identification ?? '')}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="text-primary mt-2 mb-0">Release</h6> 
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>
                    {{unslugify($kasus->operative_intra->release ?? '')}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h6 class="text-primary mt-2 mb-0">Obsgyn</h6> 
                </td>
            </tr>
            <tr>
                <td>Operator</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->obsgyn_operator ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Action</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->obsgyn_action ?? ''}}
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
            $files_title[] = 'Clinical Picture';

            $files_names[] = 'intra-clinical'; 
            @endphp 

            @foreach($files_title as $index => $title)
            @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>