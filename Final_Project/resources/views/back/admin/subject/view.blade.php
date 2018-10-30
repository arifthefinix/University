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
          <h4 class="page-title">List of all Subjects</h4>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-12">
          <div class="card-box">
              <div class="card-block">
                  <h6 class="card-title text-bold">Subject List</h6>
                  <table class="datatable table table-stripped text-center">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>University Name</th>
                              <th>Group Name</th>
                              <th>Number of seats</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($subjects as $key => $subject)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ App\University::find($subject->university_id)->university_name }}</td>
                                <td>{{ App\Group::find($subject->group_id)->group_name }}</td>
                                <td>{{ $subject->seat }}</td>
                                <td>
                                  <a href="#" class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
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
