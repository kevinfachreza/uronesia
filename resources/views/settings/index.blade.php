@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="POST" action="{{url()->current()}}/user">
                {{csrf_field()}}
                <h4 class="ct-title">Settings</h4>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="POST" action="{{url()->current()}}/password">
                {{csrf_field()}}
                <h4 class="ct-title">Ganti Password</h4>
                <div class="form-group">
                    <label>Password Saat Ini</label>
                    <input type="password" class="form-control" name="password_current">
                </div>
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" class="form-control" name="password_new">
                    <small>Minimal 6 karakter</small>
                </div>
                <div class="form-group">
                    <label>Password Baru Konfirmasi</label>
                    <input type="password" class="form-control" name="password_new_confirmation">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
