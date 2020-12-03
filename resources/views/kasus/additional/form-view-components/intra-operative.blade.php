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
                <td>Surgical Technique</td>
                <td>:</td>
                <td>{{$kasus->operative_intra->surgical_technique ?? ''}}</td>
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