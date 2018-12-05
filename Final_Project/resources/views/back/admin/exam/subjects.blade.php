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
          <h4 class="page-title">Add New Subjects</h4>
      </div>
  </div>
  <div class="row">
      <div class="col-md-5">
          <div class="card-box">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
              <h4 class="card-title">Add New</h4>
              <form action="{{route('examsubjectadd')}}" method="post">
                @csrf
                  <div class="form-group">
                      <label>Subject Name</label>
                      <input type="text" class="form-control{{ $errors->has('exam_subject_name') ? ' is-invalid' : '' }}" placeholder="Enter new Exam Subject" name="exam_subject_name" value="{{ old('exam_subject_name') }}">
                      @if ($errors->has('exam_subject_name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('exam_subject_name') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="text-center m-auto">
                      <button type="submit" class="btn btn-primary">Add Exam Subject</button>
                  </div>
              </form>
          </div>
      </div>
      <div class="col-md-5">
          <div class="card-box">
            @if(session('status_1'))
              <div class="alert alert-success">
                {{session('status_1')}}
              </div>
            @endif
              <h4 class="card-title">List of All Subjects</h4>
              <table class="datatable table table-stripped table-responsive text-center">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th> Subject Name</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=1;
                    @endphp
                      @foreach ($exam_subject_names as $exam_subject_name)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $exam_subject_name->exam_subject_name }}</td>
                            <td>
                              <a href="{{ url('exam/subject/delete') }}/{{ $exam_subject_name->id }}" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
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
