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
          <h4 class="page-title">Results</h4>
      </div>

  </div>
  <div class="row">
      <div class="offset-md-2 col-md-8">
          <div class="card-box">
            <h1>You correct <span class="text-success">{{ $correct }}</span> Answers of <span class="text-danger">{{ $i }}</span> Questions</h1>
          </div>
      </div>
  </div>
</div>

@endsection
