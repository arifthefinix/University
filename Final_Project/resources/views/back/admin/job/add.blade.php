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
          <h4 class="page-title">Add New Circular</h4>
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
              <form action="{{route('addnewjob')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <label class="col-form-label col-md-3">Circular Details</label>
                    <div class="col-md-9">
                      <textarea name="details" class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}"></textarea>

                      @if ($errors->has('details'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('details') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="" id="image_clone">
                  <div class="form-group row" id="clone_part">
                      <label class="col-form-label col-md-3">Upload an File</label>
                      <div class="col-md-9" >
                          <input class="form-control{{ $errors->has('circular') ? ' is-invalid' : '' }}" type="file" name="circular">
                          @if ($errors->has('circular'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('circular') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary m-auto">Add Circular</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
