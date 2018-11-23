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
          <h4 class="page-title">Add New University</h4>
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
              <form action="{{route('university.store')}}" method="post">
                @csrf
                  <div class="form-group">
                      <label>University Name</label>
                      <input type="text" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}" placeholder="Enter new University name" name="university_name" value="{{ old('university_name') }}">
                      @if ($errors->has('university_name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('university_name') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="text-center m-auto">
                      <button type="submit" class="btn btn-primary">Add University</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
