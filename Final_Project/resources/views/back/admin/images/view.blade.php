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
                    @if(session('status'))
                      <div class="alert alert-success">
                        {{session('status')}}
                      </div>
                    @endif
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Image</th>
                              <th>University Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                          $i=1;
                        @endphp
                          @foreach ($images as $image)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><img src="{{ asset('/storage') }}/{{ $image->image_name }}" width="150px" class="img_fluid" alt=""></td>
                                <td>{{ App\University::find($image->university_id)->university_name }}</td>
                                <td>
                                  <a href="{{ url('university/image/delete') }}/{{ $image->id }}" class="btn btn-danger text-white"> <i class="fa fa-trash-o"></i></a>
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
