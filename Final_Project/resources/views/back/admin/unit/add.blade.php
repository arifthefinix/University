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
                    <label  class="col-form-label col-md-3">Required SSC GPA</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('required_ssc_gpa') ? ' is-invalid' : '' }}" placeholder="Enter Required SSC GPA to apply" name="required_ssc_gpa" value="{{ old('required_ssc_gpa') }}" required>
                      @if ($errors->has('required_ssc_gpa'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('required_ssc_gpa') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Required HSC GPA</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('required_hsc_gpa') ? ' is-invalid' : '' }}" placeholder="Enter Required HSC GPA to apply" name="required_hsc_gpa" value="{{ old('required_hsc_gpa') }}" required>
                      @if ($errors->has('required_hsc_gpa'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('required_hsc_gpa') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Required Total GPA</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('required_total_gpa') ? ' is-invalid' : '' }}" placeholder="Enter Required Total GPA to apply" name="required_total_gpa" value="{{ old('required_total_gpa') }}" required>
                      @if ($errors->has('required_total_gpa'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('required_total_gpa') }}</strong>
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
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Exam Fee</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('apply_fee') ? ' is-invalid' : '' }}" placeholder="Enter the Exam Fee" name="apply_fee" value="{{ old('apply_fee') }}" required>
                      @if ($errors->has('apply_fee'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('apply_fee') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Number of Seats</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('seat') ? ' is-invalid' : '' }}" placeholder="Enter the Number of Seats" name="seat" value="{{ old('seat') }}" required>
                      @if ($errors->has('seat'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('seat') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Apply Process</label>
                    <div class="col-md-9">
                      <textarea type="text" class="form-control{{ $errors->has('apply_process') ? ' is-invalid' : '' }}" placeholder="Enter the Apply Process for this Unit" name="apply_process" required>{{ old('apply_process') }}</textarea>
                      @if ($errors->has('apply_process'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('apply_process') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="text-center m-auto">
                    <button type="submit" class="btn btn-primary">Add Unit</button>
                </div>
              </form>
          </div>
      </div>
  </div>
  </div>
@endsection
