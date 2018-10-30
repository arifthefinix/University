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
          <h4 class="page-title">Add New Subject</h4>
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
              <h4 class="card-title">Add New Subject</h4>
              <form action="{{route('subject.store')}}" method="post">
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
                  <label class="col-form-label col-md-3"> Select Unit</label>
                    <div class="col-md-9">
                        <select class="form-control" name="unit_id">
                            <option>-- Select --</option>
                            @foreach ($units as $unit)
                              <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                            @endforeach
                        </select>
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
                    <label  class="col-form-label col-md-3">Subject Name</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('subject_name') ? ' is-invalid' : '' }}" placeholder="Enter Subject Name" name="subject_name" value="{{ old('subject_name') }}" required>
                      @if ($errors->has('subject_name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('subject_name') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Number of Seats</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('seat') ? ' is-invalid' : '' }}" placeholder="Enter Number of seats" name="seat" value="{{ old('seat') }}" required>
                      @if ($errors->has('seat'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('seat') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="text-center m-auto">
                    <button type="submit" class="btn btn-primary">Add Subject</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
