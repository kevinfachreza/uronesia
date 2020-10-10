@extends('layouts.app')

@section('content')

<div class="register-page">
    <div class="wrapper">
        <div class="page-header bg-default">
            <div class="page-header-image" style="background-image: url('{{url('')}}/img/ill/register_bg.png');"></div>
            
            @php $class_register = 'right-panel-active' @endphp
            
            <div class="container {{$class_register}}" id="container">
                <div class="">
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <h2>URODATANESIA</h2>
                        <h2>Buat Akun</h2>
                        <p>Masukkan identitas diri anda untuk mendaftar ke aplikasi</p>
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
                            <div class="col-lg-6 col-md-12 form-group{{ $errors->has('register-password') ? ' has-error' : '' }}">
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
                        </div>

                        <button class="btn btn-primary">Sign Up</button>
                        <hr>
                        <span>Sudah punya akun? <br><a class="bg-success text-white btn-sm" href="{{url('login')}}">Klik Disini Untuk Login</a></span>
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
                        <h3 class="text-primary font-weight-light mb-2">Urodatanesia</h3>
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