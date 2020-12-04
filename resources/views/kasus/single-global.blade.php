@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <h4>{{$title}} Cases</h4>
        </div>
        <div class="col-lg-4 col-md-12">
            @if(!$coming_soon)
            <a href="{{url('kasus')}}/{{$jenis_kasus}}/print" class="btn btn-success disable-loading" target="_blank"><i class="fa fa-print"></i> Print</a>
            <a href="{{url('kasus')}}/baru?jenis={{$jenis_kasus}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Case</a>
            @endif
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
    @if($coming_soon)
    <div class="text-center py-5">
        <h4 class="font-w400">Sorry. <strong>"{{$title}}"</strong> Case Form is coming soon</h4>
    </div>
    @else
    <div class="text-center py-5">
        <h4 class="font-w400">You have no case for <strong>"{{$title}}"</strong></h4>
        <p>Click <strong>"New Case"</strong> button to add cases</p>
    </div>
    @endif
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
