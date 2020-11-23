<div class="col-12 mt-2">
    <div class="row">
        @foreach($files as $item)
        @if($item->jenis == $slug)
        <div class="col-lg-2 col-md-4 col-6">
            <div style="border:solid 1px #eee; text-align: center;height: 100px">
                <img src="{{url('')}}/{{$item->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">

            </div>
            <div class="form-group mt-1">
                <select class="form-control" name="kasus_penunjang_delete[{{$item->id}}]">
                    <option value="0">Keep Picture</option>
                    <option value="1">Delete</option>
                </select>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
