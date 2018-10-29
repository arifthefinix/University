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
          <h4 class="page-title">All Images of Universities</h4>
      </div>
  </div>
  <div class="row">
      <div class="offset-sm-2 col-sm-8">
          <div class="card-box">
              <div class="card-block">
                  <h6 class="card-title text-bold">Image List</h6>
                  <table class="datatable table table-stripped table-responsive">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Image</th>
                              <th>University Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($images as $key => $image)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><img src="{{ asset('/storage') }}/{{ $image->image_name }}" width="150px" class="img_fluid" alt=""></td>
                                <td>{{ App\University::find($image->university_id)->university_name }}</td>
                                <td>
                                  <a href="#" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
