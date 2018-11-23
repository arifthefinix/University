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
          <h4 class="page-title">List of all Universities</h4>
      </div>
  </div>
  <div class="row">
      <div class="offset-sm-2 col-sm-8">
          <div class="card-box">
              <div class="card-block">
                  <h6 class="card-title text-bold">University List</h6>
                  @if(session('status'))
                    <div class="alert alert-success">
                      {{session('status')}}
                    </div>
                  @endif
                  <table class="datatable table table-stripped table-responsive text-center">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                          $i=1;
                        @endphp
                          @foreach ($universities as $key => $universitie)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $universitie->university_name }}</td>
                                <td>
                                  <a href="{{ url('university/edit') }}/{{ $universitie->id }}" class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
                                  <a href="{{ url('university/delete') }}/{{ $universitie->id }}" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
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
