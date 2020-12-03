
<div class="row">
    <div class="col-12">
        <h4 class="display-4">POST OPERATIVE</h4>
    </div>
</div>



<div class="row">
    <div class="col-12">
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Complication</td>
                <td>:</td>
                <td>{{$kasus->operative_post->complication==1 ? 'Yes' : 'No' }}
                </td>
            </tr>
            @if($kasus->operative_post->complication == 1)
            <tr>
                <td>Complication Cause</td>
                <td>:</td>
                <td>{{$kasus->operative_post->complication_cause ?? ''}}</td>
            </tr>
            <tr>
                <td>Complication Action</td>
                <td>:</td>
                <td>{{$kasus->operative_post->complication_action ?? ''}}</td>
            </tr>
            @endif
            <tr>
                <td>Death</td>
                <td>:</td>
                <td>{{$kasus->operative_post->death==1 ? 'Yes' : 'No' }} 
                </td>
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