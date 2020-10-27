@extends('layouts.app')

@section('content')

<div class="register-page">
    <div class="wrapper">
        <div class="page-header bg-primary">
            <div class="page-header-image" style="background-image: url('{{url('')}}/img/ill/register_bg.png');"></div>
            
            @php $class_register = 'right-panel-active' @endphp
            
            <div class="container {{$class_register}}" id="container">
                <div class="">
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <h2>URODATANESIA</h2>
                        <h2>Create Account</h2>
                        <p style="font-weight: 400">Fill your identity to register into the App</p>
                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 form-group{{ $errors->has('register-name') ? ' has-error' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Name" type="text" name="register-name" value="{{ old('register-name') }}" required autofocus>
                                </div>

                                @if ($errors->has('register-name'))
                                <div class="alert alert-warning mt-2" role="alert">
                                    <span class="alert-inner--text">{{ $errors->first('register-name') }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 text-left form-group{{ $errors->has('register-phone') ? ' has-error' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Phone" type="text" name="register-phone" value="{{ old('register-phone') }}" required autofocus>
                                </div>

                                @if ($errors->has('register-phone'))
                                <div class="alert alert-warning mt-2" role="alert">
                                    <span class="alert-inner--text">{{ $errors->first('register-phone') }}</span>
                                </div>
                                @endif
                                <small>Example : +6282233331111, +6221771883</small>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 text-left form-group{{ $errors->has('register-institution') ? ' has-error' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-istanbul"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Institution" type="text" name="register-institution" value="{{ old('register-institution') }}" required autofocus>
                                </div>

                                @if ($errors->has('register-institution'))
                                <div class="alert alert-warning mt-2" role="alert">
                                    <span class="alert-inner--text">{{ $errors->first('register-institution') }}</span>
                                </div>
                                @endif
                                <small>Example : Diponegoro University, RSUD Kariadi</small>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 form-group{{ $errors->has('register-email') ? ' has-error' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control" name="register-email" value="{{ old('register-email') }}" placeholder="Email" required autofocus>
                                </div>
                                @if ($errors->has('register-email'))
                                <div class="alert alert-warning mt-2" role="alert">
                                    <span class="alert-inner--text">{{ $errors->first('register-email') }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 text-left form-group{{ $errors->has('register-password') ? ' has-error' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" type="password"  name="register-password" required="">
                                </div>
                                @if ($errors->has('register-password'))
                                <div class="alert alert-warning mt-2" role="alert">
                                    <span class="alert-inner--text">{{ $errors->first('register-password') }}</span>
                                </div>
                                @endif
                                <small>Min 6 Characters</small>
                            </div>
                        </div>

                        <button class="btn btn-primary">Sign Up</button>
                        <hr>
                        <span>Already have an ccount? <br><a class="bg-success text-white btn-sm" href="{{url('login')}}">Click here for login</a></span>
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