@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            @php $kasus_total = count($kasus) @endphp
            <h4>{{$title}} Cases - <small>Total data : {{$kasus_total}}</small></h4>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="dropdown">
                <button class="btn btn-success disable-loading dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-print"></i> Print
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @php
                        $iteration_chunk = 500;
                        $iteration_needed = $kasus_total/$iteration_chunk;
                    @endphp
                    @for($i=0;$i<$iteration_needed;$i++)
                    @php $max_range = ($i+1)*$iteration_chunk @endphp
                    <a class="dropdown-item disable-loading " target="_blank" href="{{url('kasus')}}/{{$jenis_kasus}}/print/{{$i*$iteration_chunk}}/{{$iteration_chunk}}">Print {{$i*$iteration_chunk}} - {{ $max_range < $kasus_total ? $max_range : $kasus_total }} </a>
                    @endfor
                </div>
            </div>
            <a href="{{url('kasus')}}/baru?jenis={{$jenis_kasus}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Case</a>
        </div>
    </div>
    <hr style="width: 100%">

    @forelse($kasus as $item)
    <div class="card card-px">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div class="card-text">#{{$loop->iteration}} - {{$item->creator->name ?? ''}}</div>
                    <div class="card-title">{{$item->pasien->nama}}</div>
                    <div class="card-text">{{$item->pasien->age}} {{$item->pasien->jenis_kelamin = 'lk' ? 'Man' : 'Woman'}}</div>
                    <div class="card-text">{{Carbon\Carbon::parse($item->tanggal_operasi)->format('d F Y')}}
                    </div>
                </div>
                <div class="col-4">
                    <a href="{{url('')}}/kasus/{{$jenis_kasus}}/{{$item->id}}/form-view" class="btn btn-primary">See Case</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="text-center py-5">
            <h4 class="font-w400">You have no case for <strong>"{{$title}}"</strong></h4>
            <p>Click <strong>"New Case"</strong> button to add cases</p>
        </div>
    @endforelse

</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollX": true
        } );
    } );
</script>
@endsection
