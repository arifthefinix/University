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
              <form action="{{ route('student_exam_question') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <label class="col-form-label col-md-3">Select</label>
                    <div class="col-md-9">
                      <select class="form-control" name="">
                        <option value="">--Select--</option>
                        <option value="">Bangla</option>
                        <option value="">English</option>
                        <option value="">Math</option>
                      </select>
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary m-auto">Continue</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection
