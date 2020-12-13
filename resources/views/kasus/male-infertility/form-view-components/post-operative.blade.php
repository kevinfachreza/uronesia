
<div class="row">
    <div class="col-12">
        <h4 class="display-4">POST OPERATIVE</h4>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <table class="table table-no-border view-data">
            <tr>
                <td style="width: 150px">Complaint</td>
                <td style="width: 5px">:</td>
                <td style="white-space: pre">{{$kasus->operative_post->follow_up_complaint ?? ''}}</td>
            </tr>
            <tr>
                <td>Assessment</td>
                <td>:</td>
                <td style="white-space: pre">{{$kasus->operative_post->follow_up_assessment ?? ''}}</td>
            </tr>
            <tr>
                <td>Other</td>
                <td>:</td>
                <td style="white-space: pre">{{$kasus->operative_post->follow_up_other ?? ''}} 
                </td>
            </tr>
        </table>
    </div>
</div>