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
        <h4 class="page-title">Update University</h4>
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
            <h4 class="card-title">Update <span class="text-primary"> {{$old_info->university_name}}</span></h4>
            <form action="{{ url('university/update') }}" method="post">
              @csrf
              <div class="form-group">
                <label>University Name</label>
                <input type="hidden"  name="university_id" value="{{ $old_info->id }}">
                <input type="text" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}" name="university_name" value="{{ $old_info->university_name }}">
                @if ($errors->has('university_name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('university_name') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label>University Description</label>
                <textarea type="text" class="form-control{{ $errors->has('university_description') ? ' is-invalid' : '' }}" name="university_description">{{ $old_info->university_description }}</textarea>
                @if ($errors->has('university_description'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('university_description') }}</strong>
                  </span>
                @endif
              </div>
              <div class="text-center m-auto">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
