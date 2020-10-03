@extends('layouts.app')

@section('content')
<div class="reset-page">
    <div class="wrapper">
        <div class="page-header bg-default">
            <div class="page-header-image" style="background-image: url('{{url('')}}/img/ill/reset.svg');"></div>
            <div class="container">
                <div class="col-lg-5 col-md-8 mx-auto">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header">
                            <h4 class="card-title text-center">Reset Password</h4>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Enter email address to reset password</small>
                            </div>
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>


                                @if ($errors->has('email'))
                                <div class="alert alert-warning mt-2" role="alert">
                                    <span class="alert-inner--text">{{ $errors->first('email') }}</span>
                                </div>
                                @endif

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Send</button>
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
