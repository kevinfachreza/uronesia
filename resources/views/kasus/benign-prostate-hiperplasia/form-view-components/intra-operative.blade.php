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
                <td>Duration</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->time ?? '-'}} Minutes</td>
            </tr>
            <tr>
                <td>Prostate Weight </td>
                <td>:</td>
                <td>{{$kasus->operative_intra->prostate_weight ?? '-'}} cc</td>
            </tr>
            <tr>
                <td>Blood Transfusion</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->blood_transfusion ?? '-'}} Kolf</td>
            </tr>
            <tr>
                <td>Difficulty</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->difficulty ?? '-'}} Kolf</td>
            </tr>
            <tr>
                <td>Other surgery</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgery_other ?? '-'}} Kolf</td>
            </tr>
            <tr>
                <td>Size Catheter (Fr)</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->cath_size ?? '-'}} Kolf</td>
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