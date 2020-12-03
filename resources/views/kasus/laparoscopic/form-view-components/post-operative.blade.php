<div class="row">
    <div class="col-12">
        <h4 class="display-4">POST OPERATIVE</h4>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Drain (cc)</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_post->drain ?? ''}}</td>
            </tr>
            <tr>
                <td>Cath Production (cc)</td>
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
                <td>{{$kasus->penunjang_lab_post->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_ht ?? ''}}</td>
            </tr>
            <tr>
                <td>L</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_l ?? ''}}</td>
            </tr>
            <tr>
                <td>Tr</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_tr ?? ''}}</td>
            </tr>
            <tr>
                <td>Ur</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>Cr</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_cr ?? ''}}</td>
            </tr>
        </table>

    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Diet</td>
                <td style="width: 10px">:</td>
                <td>{{$kasus->operative_post->diet ?? ''}}</td>
            </tr>
            <tr>
                <td>Vas</td>
                <td>:</td>
                <td>{{$kasus->operative_post->vas ?? ''}}</td>
            </tr>
            <tr>
                <td>Analgetics</td>
                <td>:</td>
                <td>{{unslugify($kasus->operative_post->analgetics) ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>
