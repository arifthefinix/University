@extends('layouts.master')

@section('header')
    @include('back.student.inc.header')
@endsection
@section('sidebar')
    @include('back.student.inc.sidebar')
@endsection

@section('content')
<div class="content container-fluid">
  <div class="row">
      <div class="col-sm-12">
          <h4 class="page-title">Test Your Preparation</h4>
      </div>
  </div>
  <div class="row">
      <div class="offset-md-2 col-md-6">
          <div class="card-box">
              <h4 class="card-title">Select Subject</h4>
              <table class="datatable table table-stripped table-responsive text-center">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Subject</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=1;
                    @endphp
                      @foreach ($examsubjects as $examsubject)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $examsubject->exam_subject_name }}</td>
                            <td>
                              <a class="btn btn-info" href="{{ url('student_exam_question/subject/') }}/{{ $examsubject->id }}">Start Exam</a>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection
