@extends('layouts.app')

@section('content')
<div class="section features-3" style="background-image: url('{{url('')}}/img/ill/p31.svg')">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-8">
                <h3 class="display-3 text-white"><span class="text-white">Database Kasus Urologi</span> Urodatanesia</h3>
            </div>
        </div>
        <div class="row row-grid mt-5 social-line social-line-big-icons">
            <div class="col-lg-6">
                <a href="{{url('kasus/striktur-uretra')}}" class="btn btn-gradient-twitter btn-footer">
                    <p class="title">Striktur Urethra</p>
                    <p class="subtitle">125 Kasus</p>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="{{url('kasus/trauma')}}" class="btn btn-gradient-facebook btn-footer">
                    <p class="title">Trauma</p>
                    <p class="subtitle">50 Kasus</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
