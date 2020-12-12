@extends('layouts.app')

@section('content')
<div class="pt-3" style="background-image: url('{{url('')}}/img/ill/p31.svg')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-left">
                <h3 class="font-w700 italic "><span class="font-w400">Hello</span>, {{Auth::user()->name}}</h3>
            </div>
        </div>
        <div class="card card-statistic bg-primary-light">
            <div class="card-body">
                <div class="card-text">{{$count_kasus_self}}</div>
                <div class="card-title">Cases</div>
            </div>
        </div>
        <h4 class="font-w700 p-0">Cases List</h4>
        <div class="row row-grid social-line social-line-big-icons">
            <div class="col-lg-6 mb-3">
                <a href="{{url('kasus/striktur-uretra')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Urethral Stricture</p>
                    <p class="subtitle">{{$count_kasus_striktur_uretra}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/trauma')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Trauma</p>
                    <p class="subtitle">{{$count_kasus_trauma}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/urooncology')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Uro-Oncology</p>
                    <p class="subtitle">{{$count_kasus_urooncology}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/benign-prostate-hiperplasia')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Benign Prostate Hiperplasia</p>
                    <p class="subtitle">{{$count_kasus_benign_prostate_hiperplasia}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/kidney-transplant')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Kidney Transplant</p>
                    <p class="subtitle">{{$count_kasus_kidney_transplant}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/laparoscopic')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Laparoscopic</p>
                    <p class="subtitle">{{$count_kasus_laparoscopic}} Cases</p>
                </a>
            </div>
            
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/additional')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Additional</p>
                    <p class="subtitle">{{$count_kasus_additional}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/congenital-abnormalities')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Congenital Abnormalities</p>
                    <p class="subtitle">{{$count_kasus_congenital_abnormalities}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/penile-paraffinoma')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Penile Paraffinoma</p>
                    <p class="subtitle">{{$count_kasus_penile_paraffinoma}} Cases</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/stone')}}" class="btn btn-gradient-info btn-footer">
                    <p class="title">Stone</p>
                    <p class="subtitle">Coming Soon</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/male-infertility')}}" class="btn btn-gradient-info btn-footer">
                    <p class="title">Male Infertility</p>
                    <p class="subtitle">Coming Soon</p>
                </a>
            </div>
            <div class="col-lg-6 mb-3 mt-0 ">
                <a href="{{url('kasus/uroginecology')}}" class="btn btn-gradient-info btn-footer">
                    <p class="title">Uroginecology</p>
                    <p class="subtitle">Coming Soon</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
