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
                <h4 class="page-title">Question for {{ $subname->exam_subject_name }}</h4>
              </div>

        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="card-box">
                    <h4 class="card-title">Select The Correct Answer:</h4>
                    <form action="{{ route('studentexamanswersubmit') }}" method="post">
                      @csrf
                      @foreach ($questions as $key=> $question)
                        <div class="form-group row">
                          <div class="col-md-12">
                            <h5>{{ ++$key }}. {{$question->question}}</h5>
                          </div>
                    <div class="offset-1 col-md-8">
                      @php
                        $anawers = App\Answer::where('question_id','=',$question->id)->get();
                      @endphp
                      @foreach ($anawers as $answer)
                        <div class="form-group row">
                          <input type="hidden" name="question_ids[]" value="{{$answer->question_id}}">
                          <label class="col-form-label col-md-3">Select Answer</label>
                            <div class="col-md-9">
                              <select class="form-control" name="answers[]">
                                <option value="">--Select--</option>
                                <option value="{{ $answer->option_1 }}">{{$answer->option_1}}</option>
                                <option value="{{ $answer->option_2 }}">{{$answer->option_2}}</option>
                                <option value="{{ $answer->option_3 }}">{{$answer->option_3}}</option>
                                <option value="{{ $answer->option_4 }}">{{$answer->option_4}}</option>
                              </select>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
                @endforeach
                <div class="text-center">
                    <button type="submit" class="btn btn-primary m-auto">Submit Answers</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
