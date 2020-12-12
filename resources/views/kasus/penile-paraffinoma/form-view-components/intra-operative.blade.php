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
                <td colspan="3"><h5>Surgical Technique</h5></td>
            </tr>
            <tr>
                <td>Primary Closure</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgical_technique_primary_closure == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td colspan="3"><h6 class="text-primary">Graft</h6></td>
            </tr>
            <tr>
                <td>STSG</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgical_technique_graft_stsg == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>FTSG</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgical_technique_graft_ftsg == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td colspan="3"><h6 class="text-primary">Stage</h6></td>
            </tr>
            <tr>
                <td>One Stage</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgical_technique_one_stage == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Two Stages</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgical_technique_two_stage == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <td>Second Stage</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgical_technique_second_stage == 1 ? 'Yes' : 'No'}}</td>
            </tr>
        </table>
    </div>
</div>



<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'Clinical Picture Pre Operative';
                $files_title[] = 'Clinical Picture Intra Operative';
                $files_title[] = 'Clinical Picture Post Operative';

                $files_names[] = 'clinical-picture-pre-ops'; 
                $files_names[] = 'clinical-picture-intra-ops'; 
                $files_names[] = 'clinical-picture-post-ops'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>