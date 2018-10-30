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
      <div class="offset-sm-1 col-sm-10">
          <div class="card-box">
              <div class="card-block">
                  <h6 class="card-title text-bold">University List</h6>
                  <table class="datatable table table-stripped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>University Name</th>
                              <th>Required GPA</th>
                              <th>Group Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($units as $key => $unit)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $unit->unit_name }}</td>
                                <td>{{ App\University::find($unit->university_id)->university_name }}</td>
                                <td>{{ $unit->gpa }}</td>
                                <td>{{ App\Group::find($unit->group_id)->group_name }}</td>
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
