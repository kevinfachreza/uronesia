@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Congenital Abnormalities Case</h4>
            <a class="btn btn-primary" href="{{url('')}}/kasus/congenital-abnormalities/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
            @include('kasus.components-view.delete-case-button')
            <hr>
            @include('kasus.layouts.form-view.patient-data')
            @include('kasus.congenital-abnormalities.form-view-components.pre-operative')
            <hr>
            @include('kasus.congenital-abnormalities.form-view-components.intra-operative')
            <hr>
            @include('kasus.congenital-abnormalities.form-view-components.post-operative')
        </div>
    </div>
</div>

@include('kasus.components-view.delete-case-form')
@endsection

@section('js')
@include('layouts.components-js.delete-confirmation-swal')
@endsection