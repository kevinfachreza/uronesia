@extends('layouts.app')

@section('content')

<div class="register-page">
    <div class="wrapper">
        <div class="page-header bg-default">
            <div class="page-header-image" style="background-image: url('{{url('')}}/img/ill/register_bg.png');"></div>
            @php $class_register = '' @endphp
            <div class="container {{$class_register}}" id="container">
                <div class="">

                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h2>URODATANESIA</h2>
                        <h2>Sign in</h2>
                        <p>Masukkan email dan password untuk memulai</p>


                        <div class="row justify-content-center" style="width: 100%">
                            <div class="col-lg-6 col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
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
                        <a href="{{ route('password.request') }}">Lupa Password?</a>
                        <button class="btn btn-primary mt-3">Sign In</button>

                        <hr>
                        <span>Belum punya akun? <br> <a class="bg-success text-white btn-sm" href="{{url('register')}}">Klik Disini Untuk Register</a></span>

                    </form>
                </div>
            </div>
        </div>
        <script>

            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add('right-panel-active');
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove('right-panel-active');
            });
        </script>

        <footer class="footer">
            <div class="container">
                <div class="row row-grid align-items-center mb-5">
                    <div class="col-lg-6">
                        <h3 class="text-primary font-weight-light mb-2">Uronesia</h3>
                        <h4 class="mb-0 font-weight-light">Adalah aplikasi database penelitian untuk kasus kasus urologi</h4>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
@section('js')
@endsection