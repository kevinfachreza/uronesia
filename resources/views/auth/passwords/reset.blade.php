
@extends('layouts.app')

@section('content')
<div class="reset-page">
    <div class="wrapper">
        <div class="page-header bg-primary">
            <div class="page-header-image" style="background-image: url('{{url('')}}/img/ill/reset.svg');"></div>
            <div class="container">
                <div class="col-lg-5 col-md-8 mx-auto">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header">
                            <h4 class="card-title text-center">Reset Password</h4>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Fill Email and New Password</small>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                            {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                    <div class="alert alert-warning mt-2" role="alert">
                                        <span class="alert-inner--text">{{ $errors->first('email') }}</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password"  name="password" required="">
                                    </div>
                                    @if ($errors->has('password'))
                                    <div class="alert alert-warning mt-2" role="alert">
                                        <span class="alert-inner--text">{{ $errors->first('password') }}</span>
                                    </div>
                                    @endif
                                    <small>Min 6 Characters</small>
                                </div>
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password Confirmation" type="password"  name="password_confirmation" required="">
                                    </div>
                                    @if ($errors->has('password_confirmation'))
                                    <div class="alert alert-warning mt-2" role="alert">
                                        <span class="alert-inner--text">{{ $errors->first('password_confirmation') }}</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
