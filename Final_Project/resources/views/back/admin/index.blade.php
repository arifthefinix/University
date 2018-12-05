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
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-success"><i class="fa fa-book" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                <h3>{{ App\Subject::count() }}</h3>
                <span>Subjects</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-success"><i class="fa fa-university" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ App\University::count() }}</h3>
                    <span>Universities</span>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-success"><i class="fa fa-university" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ App\Unit::count() }}</h3>
                    <span>Units</span>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-success"><i class="fa fa-users" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ App\student_info::count() }}</h3>
                    <span>Students</span>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="card card-table">
                    <div class="card-header bg-white">
                        <h4 class="card-title m-b-0">Last 10 Students</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped custom-table m-b-0 text-center">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $i=1;
                          @endphp
                          @foreach ($students as $student)
                            <tr>
                              <td>{{  $i++ }}</td>
                              <td>{{ App\User::find($student->user_id)->name}}</td>
                              <td>{{ App\User::find($student->user_id)->email}}</td>
                              <td>{{ $student->gender }}</td>
                              <td> <a href="#exampleModalCenter{{ $student->id }}" data-toggle="modal" class="btn btn-info">View Details</a></td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <a href="{{ route('allstudent') }}" class="text-muted">View all Students</a>
                    </div>
                </div>
                @foreach ($students as $student)
                  <div class="modal fade" id="exampleModalCenter{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Details About <span class="text-primary"> {{ App\User::find($student->user_id)->name }}</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="">
                          <h4>Student Name</h4>
                          <p>{{ App\User::find($student->user_id)->name }}</p>
                        </div>
                        <div class="">
                          <h4>Studnet Email</h4>
                          <p>{{ App\User::find($student->user_id)->email }}</p>
                        </div>
                        <div class="">
                          <h4>Date of Birth</h4>
                          <p>{{ $student->dob }}</p>
                        </div>
                        <div class="">
                          <h4>Gender</h4>
                          <p>{{ $student->gender  }}</p>
                        </div>
                        <div class="">
                          <h4>Group</h4>
                          <p>{{ App\Group::find($student->group_id)->group_name  }}</p>
                        </div>
                        <div class="">
                          <h4>SSC Year</h4>
                          <p>{{ $student->ssc_year  }}</p>
                        </div>
                        <div class="">
                          <h4>SSC GPA</h4>
                          <p>{{ $student->ssc_gpa  }}</p>
                        </div>
                        <div class="">
                          <h4>HSC Year</h4>
                          <p>{{ $student->hsc_year  }}</p>
                        </div>
                        <div class="">
                          <h4>HSC GPA</h4>
                          <p>{{ $student->hsc_gpa  }}</p>
                        </div>
                      </div>
                      <div class="modal-footer m-auto">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
