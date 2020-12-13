<div class="row">
    <div class="col-12">
        <h4 class="display-4">INTRA OPERATIVE</h4>
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Date</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_intra->operation_date ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="3"><h6 class="text-primary">Non Invasive</h6></td>
            </tr>
            <tr>
                <td>Empiric</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->non_invasive_empiric ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Hormonal</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->non_invasive_hormonal ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td colspan="3"><h6 class="text-primary">Invasive</h6></td>
            </tr>
            <tr>
                <td>MESA</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->invasive_mesa ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>PESA</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->invasive_pesa ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>TESA</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->invasive_tesa ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>TESE</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->invasive_tese ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td>Anastomosis</td>
                <td>:</td>
                <td>
                    @php $value = $kasus->operative_intra->invasive_anastomosis ?? '0' @endphp
                    {{$value == 1 ? 'Yes' : 'No'}}
                </td>
            </tr>
            <tr>
                <td colspan="3"><h6 class="text-primary">Other Treatments</h6></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>
                <td>
                    {{$kasus->operative_intra->treatment_others ?? ''}}
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