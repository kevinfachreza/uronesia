<div class="row">
    <div class="col-12">
        <h4 class="display-4">POST OPERATIVE</h4>
        <h6 style="font-weight: 600" class="text-primary">Operator</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Drain (cc)</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_post->drain ?? ''}}</td>
            </tr>
            <tr>
                <td>Urethral Catheter (cc)</td>
                <td>:</td>
                <td>{{$kasus->operative_post->urethral_cath ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'BNO Post Operative';
                $files_names[] = 'post-operative-bno'; 
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <h6 style="font-weight: 600" class="text-primary">Blood</h6>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">HB</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>Leucocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_leucocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>Platelets</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_trombocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>Ureum</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>Creatinine</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cr ?? ''}}</td>
            </tr>
            <tr>
                <td>Na</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_na ?? ''}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_k ?? ''}}</td>
            </tr>
            <tr>
                <td>Cl</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_pre->lab_cl ?? ''}}</td>
            </tr>
        </table>

    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Resipien Renogram</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_post->recipient_renogram ?? ''}}</td>
            </tr>
            <tr>
                <td>Complication</td>
                <td>:</td>
                <td>{{$kasus->operative_post->complication == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            @if($kasus->operative_post->complication == 1)
            <tr>
                <td>Complication Action</td>
                <td>:</td>
                <td>{{$kasus->operative_post->complication_action ?? ''}}</td>
            </tr>
            <tr>
                <td>Complication Cause</td>
                <td>:</td>
                <td>{{$kasus->operative_post->complication_cause ?? ''}}</td>
            </tr>
            @endif
            <tr>
                <td>Death</td>
                <td>:</td>
                <td>{{$kasus->operative_post->death == 1 ? 'Yes' : 'No'}}</td>
            </tr>
            @if($kasus->operative_post->death == 1)
            <tr>
                <td>Death Cause</td>
                <td>:</td>
                <td>{{$kasus->operative_post->death_cause ?? ''}}</td>
            </tr>
            @endif
        </table>
    </div>
</div>
