@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="display-3">Benign Prostate Hiperplasia Case</h4>
            <a class="btn btn-primary" href="{{url('')}}/kasus/benign-prostate-hiperplasia/{{$kasus->id}}/form"><i class="fa fa-pencil"></i> Edit</a>
            <hr>
            @include('kasus.layouts.form-view.patient-data')
            @include('kasus.layouts.form-view.pre-ops')
            @include('kasus.benign-prostate-hiperplasia.form-view-components.pre-operative')
            <hr>
            @include('kasus.benign-prostate-hiperplasia.form-view-components.intra-operative')
            <hr>
            @include('kasus.benign-prostate-hiperplasia.form-view-components.post-operative')
        </div>
    </div>
</div>
@endsection

@section('js')
</script>
@endsection