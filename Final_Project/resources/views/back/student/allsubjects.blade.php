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
           <h4 class="page-title">List of all <b class="text-primary">Subjects</b> of  <b class="text-info">Universities</b> according to your eligibility</h4>
      </div>
  </div>
  <div class="row">
      <div class="offset-sm-1 col-sm-10">
          <div class="card-box">
              <div class="card-block">
                  <h6 class="card-title text-bold">Units List</h6>
                  <table class="datatable table table-stripped table-responsive text-center">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>Unit Name</th>
                              <th>University Name</th>
                              <th>Number of Seats</th>
                              <th>Group Name</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($units as  $unit)
                          @php
                            $subjects = App\Subject::where('unit_id','=',$unit->unit_id)->get();
                          @endphp
                        @endforeach
                          {{-- @foreach ($subjects as $key => $subject)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ App\Unit::find($subject->unit_id)->unit_name }}</td>
                                <td>{{ App\University::find($subject->university_id)->university_name }}</td>
                                <td>{{ $subject->seat }}</td>
                            </tr>
                          @endforeach --}}
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
