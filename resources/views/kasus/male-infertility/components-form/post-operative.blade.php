<div class="row mt-2">
	<div class="col-12">
		<h1 class="display-4">POST OPERATIVE</h1>
	</div>
</div>

<div class="row mt-2">
	<div class="col-12">
		<div class="form-group">
			<label class="label">Complaint</label>
			<textarea type="text" class="form-control"  name="post_operative__follow_up_complaint" >{{$kasus->operative_post->follow_up_complaint ?? ''}}</textarea>
		</div>
        <div class="form-group">
            <label class="label">Assessment</label>
            <textarea type="text" class="form-control"  name="post_operative__follow_up_assessment" >{{$kasus->operative_post->follow_up_assessment ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label class="label">Other</label>
            <textarea type="text" class="form-control"  name="post_operative__follow_up_other" >{{$kasus->operative_post->follow_up_other ?? ''}}</textarea>
        </div>
	</div>
</div>