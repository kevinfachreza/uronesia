@extends('layouts.app')

@section('content')
<div class="container main-content py-4">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="POST" action="{{url()->current()}}/user">
                {{csrf_field()}}
                <h4 class="ct-title">Settings</h4>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label>Institution</label>
                    <input type="text" class="form-control" name="institution" value="{{$user->institution}}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="POST" action="{{url()->current()}}/password">
                {{csrf_field()}}
                <h4 class="ct-title">Change Password</h4>
                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" class="form-control" name="password_current">
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" name="password_new">
                    <small>Minimum 6 Characters</small>
                </div>
                <div class="form-group">
                    <label>New Password Confirmation</label>
                    <input type="password" class="form-control" name="password_new_confirmation">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
