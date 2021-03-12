<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            @php 
                $files_title[] = 'Clinical Picture';

                $files_names[] = 'post-operative-clinical';
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Wound</td>
                <td>:</td>
                <td>{{$kasus->operative_post->wound ?? ''}}</td>
            </tr>
            <tr>
                <td>Drain</td>
                <td>:</td>
                <td>{{$kasus->operative_post->drain ?? ''}} cc</td>
            </tr>
            <tr>
                <td>Urethral Catheter</td>
                <td>:</td>
                <td>{{$kasus->operative_post->urethral_cath ?? ''}} cc</td>
            </tr>
            <tr>
                <td>BNO Post Operative</td>
                <td>:</td>
                <td>{{$kasus->operative_post->bno ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h5>Laboratory Result</h5>
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">HB</td>
                <td style="width: 5px">:</td>
                <td>{{$kasus->penunjang_lab_post->lab_hb ?? ''}}</td>
            </tr>
            <tr>
                <td>HT</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_ht ?? ''}}</td>
            </tr>
            <tr>
                <td>Leucocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_leucocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>Trombocyte</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_trombocyte ?? ''}}</td>
            </tr>
            <tr>
                <td>UR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_ur ?? ''}}</td>
            </tr>
            <tr>
                <td>CR</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_cr ?? ''}}</td>
            </tr>
            <tr>
                <td>NA</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_na ?? ''}}</td>
            </tr>
            <tr>
                <td>K</td>
                <td>:</td>
                <td>{{$kasus->penunjang_lab_post->lab_k ?? ''}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="row files-upload">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h5>Radiology Result</h5>
            </div>
            @php 
                $files_title = [];
                $files_names = [];
                $files_title[] = 'Thorax';
                $files_title[] = 'BNO/IVP';
                $files_title[] = 'USG';
                $files_title[] = 'CT';
                $files_title[] = 'MRI';
                $files_title[] = 'Bone Scan';
                $files_title[] = 'Urethrocystoscopy';

                $files_names[] = 'radiology-post-thorax'; 
                $files_names[] = 'radiology-post-bnoivp'; 
                $files_names[] = 'radiology-post-usg'; 
                $files_names[] = 'radiology-post-ct'; 
                $files_names[] = 'radiology-post-mri'; 
                $files_names[] = 'radiology-post-bone'; 
                $files_names[] = 'radiology-post-urethrocystocopy';
            @endphp 

            @foreach($files_title as $index => $title)
                @include('kasus.components-form.file-view',['title'=>$title,'slug'=>$files_names[$index]])
            @endforeach
            
            
        </div>
    </div>
</div>



<div class="row">
    <div class="col-12">
        <table class="table table-no-border">
            <tr>
                <td style="width: 150px">Complication</td>
                <td>:</td>
                @php $temp = $kasus->operative_post->complication ?? '' @endphp
                <td>{{$temp == 1 ? 'Yes' : 'No' }} 
                    @if($temp == 1)
                        - Action : {{$kasus->operative_post->complication_action ?? '-'}}
                    @endif
                </td>
            </tr>
            <tr>
                <td>Death</td>
                <td>:</td>
                @php $temp = $kasus->operative_post->death ?? '' @endphp
                <td>{{$temp ==1 ? 'Yes' : 'No' }} 
                    @if($temp  == 1)
                        ( {{$kasus->operative_post->death_cause ?? '-'}} )
                    @endif
                </td>
            </tr>
            <tr>
                <td>Next Plan</td>
                <td>:</td>
                <td>{{$kasus->operative_post->next_plan ?? ''}} 
                </td>
            </tr>
        </table>
    </div>
</div>