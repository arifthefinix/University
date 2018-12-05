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
        <h4 class="page-title">Add New Images</h4>
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
            <p class="content-group text-primary"> First select the university for which you want to add image. If you need to add more than one image just click add another button.</p>
            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label class="col-form-label col-md-3"> Select University</label>
                  <div class="col-md-9">
                      <select class="form-control" name="university_id">
                          <option>-- Select --</option>
                          @foreach ($universities as $university)
                            <option value="{{ $university->id }}">{{ $university->university_name }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="" id="image_clone">
                <div class="form-group row" id="clone_part">
                    <label class="col-form-label col-md-3">Upload an Image</label>
                    <div class="col-md-9" >
                      <input class="form-control" type="file" name="image_name">
                      <span class="text-warning">Image resulation must be 1280*450px</span>
                    </div>
                </div>
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-primary m-auto">Add Image</button>
              </div>
            </form>
          </div>
      </div>
      </div>
  </div>
@endsection
