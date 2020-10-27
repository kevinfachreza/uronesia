@extends('layouts.app')

@section('content')

<div class="register-page">
    <div class="wrapper">
        <div class="page-header bg-primary">
            <div class="page-header-image" style="background-image: url('{{url('')}}/img/ill/register_bg.png');"></div>
            @php $class_register = '' @endphp
            <div class="container {{$class_register}}" id="container">
                <div class="">

                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h2>URODATANESIA</h2>
                        <h2>Sign in</h2>
                        <p style="font-weight: 400">Fill Email and Password</p>


                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
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
                        </div>
                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
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
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">Sign In</button>

                        <hr>
                        <span>Doesn't Have Account?<br> <a class="bg-success text-white btn-sm" href="{{url('register')}}">Create Account</a></span>
                        <hr>
                        <span>Forgot Password? <br> <a class="bg-success text-white btn-sm" href="{{ route('password.request') }}">Click here for Reset Password</a></span>

                    </form>
                </div>
            </div>
        </div>

        <footer class="footer bg-primary">
            <div class="container">
                <div class="row row-grid align-items-center mb-5">
                    <div class="col-lg-6">
                        <h3 class="font-w700 mb-2" style="color: #000">Urodatanesia</h3>
                        <h4 class="mb-0 font-weight-light" style="color: #000">Is a databased urology case application for all urologists in the world</h4>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
@section('js')
@endsection