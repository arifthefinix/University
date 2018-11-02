@extends('layouts.master')

@section('header')
  @include('back.inc.header')
@endsection


@section('sidebar')
  @include('back.inc.sidebar')
@endsection

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h4 class="page-title">Change Password</h4>
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
          
            <form method="post" action="{{route('studentpasswordupdate')}}">
              @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Old password</label>
                            <input type="password" id="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password">
                            @if ($errors->has('old_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('old_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>New password</label>
                            <input type="password" id="new_password" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" name="new_password">
                            @if ($errors->has('new_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('new_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" id="confirm_password" class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" name="confirm_password">
                            @if ($errors->has('confirm_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center m-t-20">
                        <button type="submit" class="btn btn-primary btn-lg">Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
