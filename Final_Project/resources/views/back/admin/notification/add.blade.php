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
      <div class="col-sm-12">
          <h4 class="page-title">Add New Notification for students</h4>
      </div>
  </div>
  <div class="row">
      <div class="offset-md-2 col-md-6">
          <div class="card-box">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
              <h4 class="card-title">Add New</h4>
              <form action="{{route('notification.store')}}" method="post">
                @csrf
                  <div class="form-group">
                      <label>Notification</label>
                      <textarea type="text" class="form-control{{ $errors->has('notification_text') ? ' is-invalid' : '' }}" placeholder="Enter new Notification" name="notification_text">{{ old('notification_text') }}</textarea>
                      @if ($errors->has('notification_text'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('notification_text') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="text-center m-auto">
                      <button type="submit" class="btn btn-primary">Add Notification</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
