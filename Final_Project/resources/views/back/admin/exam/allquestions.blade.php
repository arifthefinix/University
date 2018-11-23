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
          <h4 class="page-title">All Questions List</h4>
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
                  <h6 class="card-title text-bold">Questions</h6>
                  <table class="datatable table table-stripped table-responsive text-center">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Question</th>
                              <th>Subject</th>
                              <th>Options</th>
                              <th>Correct Ans.</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                          $i=1;
                        @endphp
                          @foreach ($questions as $question)
                            <tr>
                                <td>{{  $i++ }}</td>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->getExamSubject->exam_subject_name }}</td>
                                <td>
                                  <ul>
                                    <li>{{ $question->getAnswer->option_1}}</li>
                                    <li>{{ $question->getAnswer->option_2}}</li>
                                    <li>{{ $question->getAnswer->option_3}}</li>
                                    <li>{{ $question->getAnswer->option_4}}</li>
                                  </ul>
                                </td>
                                <td>{{ $question->getAnswer->correct_ans}}</td>
                                <td>
                                  <a href="{{ url('question/delete') }}/{{ $question->id }}" title="Delete" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
