<h4 class="display-4">INTRA OPERATIVE</h4>
<div class="row">
    <div class="col-12">
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">OPERATOR</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->operator ?? ''}}</td>
            </tr>
            <tr>
                <td>Operation Date</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->operation_date ?? ''}}
                </td>
            </tr>
            <tr>
                <td>Time</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time ?? '-'}} Minutes</td>
            </tr>
            <tr>
                <td>Blood Loss</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->blood_loss ?? '-'}} cc</td>
            </tr>
            <tr>
                <td>Blood Transfusion</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->blood_transfusion ?? '-'}} Kolf</td>
            </tr>
        </table>

        <h5>Urinary Diversion</h5>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Nephrostomy Position</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->urinary_diversion_nephrostomy_pos) ?? ''}}</td>
            </tr>
            <tr>
                <td>Nephrostomy Size</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->urinary_diversion_nephrostomy_size ?? ''}}
                </td>
            </tr>
            <tr>
                <td>DJ Stent Position</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->urinary_diversion_dj_stent_pos) ?? '-'}}</td>
            </tr>
            <tr>
                <td>DJ Stent Size</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->urinary_diversion_dj_stent_size ?? '-'}}</td>
            </tr>
            <tr>
                <td>Ureter Catheter Position</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->urinary_diversion_ureter_cath_pos) ?? '-'}}</td>
            </tr>
            <tr>
                <td>Ureter Catheter Size</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->urinary_diversion_ureter_cath_size ?? '-'}}</td>
            </tr>
            <tr>
                <td>Cystotomy</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->cystostomy_desc ?? '-'}}</td>
            </tr>
            <tr>
                <td>Cystotomy Size</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->cystostomy_size ?? '-'}}</td>
            </tr>
            <tr>
                <td>Urethral Cath Position</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_intra->urinary_diversion_urethral_cath_pos) ?? '-'}}</td>
            </tr>
            <tr>
                <td>Urethral Cath Size</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->urinary_diversion_urethral_cath_size ?? '-'}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'Clinical Picture';

                $files_names[] = 'intra-clinical-picture'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>
