@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Password</div>

                <div class="card-body">
@include('flash-message')

<form id="form-change-password" role="form" method="POST" action="{{ route('changepassword') }}" novalidate class="form-horizontal">
  <div class="col-md-9">             
    <label for="current-password" class="col-sm-4 control-label">Current Password</label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password">
        @if ($errors->has('current-password'))
            <span>
                <strong>{{ $errors->first('current-password') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <label for="password" class="col-sm-4 control-label">New Password</label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        @if ($errors->has('password'))
            <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
        @if ($errors->has('password_confirmation'))
            <span>
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-6">
      <button type="submit" class="btn btn-danger">Submit</button>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
