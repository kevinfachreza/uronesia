
<div class="row">
    <div class="col-12">
        <h4 class="display-4">POST OPERATIVE</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Haematoma</td>
                <td style="width: 10px">:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->haematoma ?? '')}}</td>
            </tr>
            <tr>
                <td>Oedema Scrotum</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->oedema_scrotum ?? '')}}</td>
            </tr>
            <tr>
                <td>Wound Dehicense</td>
                <td>:</td>
                <td>{{viewAttrYesNo($kasus->operative_post->wound_dehicense ?? '')}}</td>
            </tr>
        </table>
    </div>
</div>


<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'Clinical Picture';

                $files_names[] = 'post-ops-clinical-picture'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach            
        </div>
    </div>
</div>