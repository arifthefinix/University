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
          <h4 class="page-title">Add New University Unit</h4>
      </div>

  </div>
  <div class="row">
      <div class="offset-md-2 col-md-6">
          <div class="card-box">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
              <h4 class="card-title">Add New Unit</h4>
              <form action="{{route('unit.store')}}" method="post">
                @csrf
                <div class="form-group row">
                  <label class="col-form-label col-md-3"> Select University</label>
                    <div class="col-md-9">
                        <select class="form-control" name="university_id">
                            <option>-- Select --</option>
                            @foreach ($universities as $university)
                              <option value="{{ $university->id }}">{{ $university->university_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Unit Name</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('unit_name') ? ' is-invalid' : '' }}" placeholder="Enter new unit name" name="unit_name" value="{{ old('unit_name') }}" required>
                      @if ($errors->has('unit_name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('unit_name') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Required GPA</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('gpa') ? ' is-invalid' : '' }}" placeholder="Enter Required Gpa to apply" name="gpa" value="{{ old('gpa') }}" required>
                      @if ($errors->has('gpa'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('gpa') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3"> Select Group</label>
                    <div class="col-md-9">
                        <select class="form-control" name="group_id" required>
                            <option>-- Select --</option>
                            @foreach ($groups as $group)
                              <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Application Deadline</label>
                    <div class="col-md-9">
                      <input type="text" class=" datetimepicker form-control{{ $errors->has('application_deadline') ? ' is-invalid' : '' }}" placeholder="Enter the date of application deadline" name="application_deadline" value="{{ old('application_deadline') }}" required>
                      @if ($errors->has('application_deadline'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('application_deadline') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Exam Date</label>
                    <div class="col-md-9">
                      <input type="text" class="datetimepicker form-control{{ $errors->has('exam_date') ? ' is-invalid' : '' }}" placeholder="Enter the Date of Exam" name="exam_date" value="{{ old('exam_date') }}" required>
                      @if ($errors->has('exam_date'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('exam_date') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="text-right m-auto">
                    <button type="submit" class="btn btn-primary">Add Unit</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
