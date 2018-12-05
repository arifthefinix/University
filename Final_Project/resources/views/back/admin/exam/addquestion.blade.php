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
          <h4 class="page-title">Add New Question</h4>
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
              <h4 class="card-title">Add New Question</h4>
              <form action="{{route('addnewquestion')}}" method="post">
                @csrf
                <div class="form-group row">
                  <label class="col-form-label col-md-3"> Select Subject</label>
                    <div class="col-md-9">
                        <select class="form-control" name="exam_subject_id">
                            <option>-- Select --</option>
                            @foreach ($exam_subjects as $exam_subjects)
                              <option value="{{ $exam_subjects->id }}">{{ $exam_subjects->exam_subject_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Question</label>
                    <div class="col-md-9">
                      <textarea class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" placeholder="Enter Question" name="question" required>{{ old('question') }}</textarea>
                      @if ($errors->has('question'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('question') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Option 1</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('option_1') ? ' is-invalid' : '' }}" placeholder="Enter Option 1" name="option_1" value="{{ old('option_1') }}" required>
                      @if ($errors->has('option_1'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('option_1') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Option 2</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('options_2') ? ' is-invalid' : '' }}" placeholder="Enter Option 2" name="option_2" value="{{ old('options_2') }}" required>
                      @if ($errors->has('options_2'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('options_2') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Option 3</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('options_3') ? ' is-invalid' : '' }}" placeholder="Enter Option 3" name="option_3" value="{{ old('options_3') }}" required>
                      @if ($errors->has('options_3'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('options_3') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Option 4</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('options_4') ? ' is-invalid' : '' }}" placeholder="Enter Option 4" name="option_4" value="{{ old('options_4') }}" required>
                      @if ($errors->has('options_4'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('options_4') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-form-label col-md-3">Correct Answer</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control{{ $errors->has('correct_ans') ? ' is-invalid' : '' }}" placeholder="Enter Correct Answer" name="correct_ans" value="{{ old('correct_ans') }}" required>
                      @if ($errors->has('correct_ans'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('correct_ans') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="text-center m-auto">
                    <button type="submit" class="btn btn-primary">Add Question</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
