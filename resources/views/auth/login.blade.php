@extends('layouts.app')

@section('content')

<div class="register-page">
    <div class="wrapper">
        <div class="page-header bg-default">
            <div class="page-header-image" style="background-image: url('{{url('')}}/img/ill/register_bg.png');"></div>
            @if ($errors->has('register-name') || $errors->has('register-password') || $errors->has('register-email'))
            @php $class_register = 'right-panel-active' @endphp
            @else
            @php $class_register = '' @endphp
            @endif
            <div class="container {{$class_register}}" id="container">
                <div class="form-container sign-up-container">
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <h2>Buat Akun</h2>
                        <p>Masukkan identitas diri anda untuk mendaftar ke aplikasi</p>
                        <div class="form-group{{ $errors->has('register-name') ? ' has-error' : '' }} mb-3">
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

                        <div class="form-group{{ $errors->has('register-email') ? ' has-error' : '' }} mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control" name="register-email" value="{{ old('register-email') }}" required autofocus>
                            </div>
                            @if ($errors->has('register-email'))
                                <div class="alert alert-warning mt-2" role="alert">
                                    <span class="alert-inner--text">{{ $errors->first('register-email') }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('register-password') ? ' has-error' : '' }}">
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
                            <small>Minimal 6 Karakter</small>
                        </div>

                        <button class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">

                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h2>Sign in</h2>
                        <p>Masukkan email dan password untuk memulai</p>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
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
                        </div>
                        <a href="{{ route('password.request') }}">Lupa Password?</a>
                        <button class="btn btn-primary mt-3">Sign In</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h3 class="text-white">Selamat Datang di Uronesia!</h3>
                            <p>
                                Jika anda sudah memiliki akun silahkan Sign In.
                            </p>
                            <button class="btn btn-neutral btn-sm" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h3 class="text-white">Tidak Memiliki Akun?</h3>
                            <p>Daftarkan diri Anda sekarang juga!</p>
                            <button class="btn btn-neutral btn-sm" id="signUp">Sign Up</button>
                        </div>
                    </div>
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