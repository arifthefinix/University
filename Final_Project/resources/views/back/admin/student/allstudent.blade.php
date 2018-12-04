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
        <h4 class="page-title">All Students List</h4>
      </div>
    </div>
    <div class="row">
      <div class="offset-sm-1 col-sm-9">
          <div class="card-box">
              <div class="card-block">
                  @if(session('status'))
                    <div class="alert alert-danger">
                      {{session('status')}}
                    </div>
                  @endif
                  <h6 class="card-title text-bold">Students</h6>
                  <table class="datatable table table-stripped table-responsive text-center">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Created at</th>
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
                                <td>{{ App\User::find($student->user_id)->name }}</td>
                                <td>{{ App\User::find($student->user_id)->email }}</td>
                                <td>{{ $student->created_at }}</td>
                                <td>
                                  <a href="#exampleModalCenter{{ $student->id }}" data-toggle="modal" title="View Details" class="btn btn-primary"> <i class="fa fa-eye"></i></a>
                                  <a href="{{ url('admin/student/delete') }}/{{ $student->user_id }}" title="Delete" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
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
