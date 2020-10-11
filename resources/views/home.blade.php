@extends('layouts.app')

@section('content')
<div class="pt-3" style="background-image: url('{{url('')}}/img/ill/p31.svg')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-left">
                <h3 class="font-w700 italic "><span class="font-w400">Halo</span>, {{Auth::user()->name}}</h3>
            </div>
        </div>
        <div class="card card-statistic bg-primary-light">
            <div class="card-body">
                <div class="card-text">{{$count_kasus_self}}</div>
                <div class="card-title">Kasus Terisi</div>
            </div>
        </div>
        <h4 class="font-w700 p-0">Daftar Kasus</h4>
        <div class="row row-grid social-line social-line-big-icons">
            <div class="col-lg-6">
                <a href="{{url('kasus/striktur-uretra')}}" class="btn btn-gradient-yellow btn-footer">
                    <p class="title">Striktur Urethra</p>
                    <p class="subtitle">{{$count_kasus_striktur_uretra}} Kasus</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
