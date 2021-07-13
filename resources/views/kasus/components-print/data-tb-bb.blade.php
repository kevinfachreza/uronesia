@php $tb = $item->tb*$item->tb/100/100 @endphp
@if($tb == 0)
<td>0</td>
@else
<td>{{number_format($item->bb / ($tb),2) }}</td>
@endif