@php $slug_kebab = str_replace("-","_",$slug); @endphp
@php $files = $kasus->penunjang ?? [] @endphp

<div class="col-12 mt-2">
    <div class="row">
        <div class="col-12">
            <h5>{{$title}}</h5>
        </div>
        @php $count = 0 @endphp
        @foreach($files as $item)
        @if($item->jenis == $slug_kebab || $item->jenis == $slug)
        @php $count++ @endphp
        <div class="col-lg-2 col-md-4 col-6">
            <div style="border:solid 1px #eee; text-align: center;height: 100px">
                <a href="{{url('')}}/{{$item->path}}" target="_blank" class="disable-loading">
                    <img src="{{url('')}}/{{$item->path}}" class="img-fluid" style="max-height: 100%; max-width: 100%;">
                </a>
            </div>
        </div>
        @endif
        @endforeach
        @if($count == 0)
        <div class="col-12">
            <span>Data does not exist</span>
        </div>
        @endif
    </div>
</div>
