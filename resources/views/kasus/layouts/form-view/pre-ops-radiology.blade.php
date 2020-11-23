<div class="row">
    <div class="col-12">
        <h5>Radiology Pictures</h5>
        <div class="row">
            @forelse($kasus->penunjang_radiology as $penunjang)
            <div class="col-lg-2 col-md-4 col-6">
                <div style="border:solid 1px #eee; text-align: center;height: 100px">
                    <a href="{{url('')}}/{{$penunjang->path}}">
                        <img src="{{url('')}}/{{$penunjang->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                    </a>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>Radiology Pictures is Empty</p>
            </div>
            @endforelse
        </div>
    </div>
</div>