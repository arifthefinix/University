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
          <h4 class="page-title">All Job Circular</h4>
      </div>
  </div>
  <div class="row">
      <div class="offset-sm-2 col-sm-8">
          <div class="card-box">
              <div class="card-block">
                  <h6 class="card-title text-bold">Job Circulars List</h6>
                  <table class="datatable table table-stripped table-responsive">
                    @if(session('status'))
                      <div class="alert alert-success">
                        {{session('status')}}
                      </div>
                    @endif
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Details</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                          $i=1;
                        @endphp
                          @foreach ($jobs as $job)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $job->details }}</td>
                                <td>
                                  <a target="_blank" href="{{ asset('storage') }}/{{ $job->circular }}" class="btn btn-danger text-white"> <i class="fa fa-eye"></i></a>
                                  <a href="{{ url('job/delete') }}/{{ $job->id }}" class="btn btn-danger text-white"> <i class="fa fa-trash-o"></i></a>
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
