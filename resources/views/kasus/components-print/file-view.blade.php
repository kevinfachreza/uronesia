
@php $slug_kebab = str_replace("-","_",$slug); @endphp
@php $files = $kasus->penunjang ?? [] @endphp
@php $count = 0 @endphp
@foreach($files as $item)
    @if($item->jenis == $slug_kebab || $item->jenis == $slug)
    @php $count++ @endphp
    <a class="" href="{{url($item->path)}}" target="_blank">#File{{$loop->iteration}}</a><br>
    @endif
@endforeach