@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Kidney Transplant Case</h4>
            <a class="btn btn-primary" href="{{url('')}}/kasus/kidney-transplant/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
            <hr>
            @include('kasus.layouts.form-view.patient-data')
            @include('kasus.kidney-transplant.form-view-components.pre-operative')
            @include('kasus.kidney-transplant.form-view-components.intra-operative')
            @include('kasus.kidney-transplant.form-view-components.post-operative')
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
