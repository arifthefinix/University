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
        <div class="col-sm-7 col-4">
            <h4 class="page-title">Update Information</h4>
        </div>
    </div>
    <div class="card-box">
        <div class="row">
            <div class="offset-md-3 col-md-6">
              <div class="card-box">
                @if(session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif
                <div class="profile-view">
                    <form class="" action="{{ route('adminprofileedit') }}" method="post">
                      @csrf
                      <div class="form-group row">
                          <label class="col-form-label col-md-2">Name</label>
                          <div class="col-md-10">
                              <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $old_info->name }}">
                              @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-form-label col-md-2">E-mail</label>
                          <div class="col-md-10">
                              <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $old_info->email }}">
                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="text-center m-auto">
                        <button type="submit" class="btn btn-primary">Update Info</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
