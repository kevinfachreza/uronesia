@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Laparoscopic Case</h4>
            <a class="btn btn-primary" href="{{url('')}}/kasus/laparoscopic/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
            <hr>
            @include('kasus.layouts.form-view.patient-data')
            @include('kasus.layouts.form-view.pre-ops-2')
            @include('kasus.laparoscopic.form-view-components.pre-operative')
            @include('kasus.laparoscopic.form-view-components.intra-operative')
            @include('kasus.laparoscopic.form-view-components.post-operative')
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection