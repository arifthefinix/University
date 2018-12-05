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
            <div class="col-sm-7 col-4">
                <h4 class="page-title">Update Information</h4>
            </div>
        </div>
        <div class="card-box">
            <div class="row">
                <div class="offset-md-2 col-md-7">
                    <div class="card-box">
                    @if(session('status'))
                      <div class="alert alert-success">
                        {{session('status')}}
                      </div>
                    @endif
                    <div class="profile-view">
                        <form class="" action="{{ route('studentprofileedit') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $old_info->name }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">E-mail</label>
                                <div class="col-md-10 mt-1">
                                    {{ $old_info->email }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Phone</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->phone }}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">SSC Year</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control{{ $errors->has('ssc_year') ? ' is-invalid' : '' }}" name="ssc_year" value="{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->ssc_year }}">
                                    @if ($errors->has('ssc_year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ssc_year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">SSC GPA</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control{{ $errors->has('ssc_gpa') ? ' is-invalid' : '' }}" name="ssc_gpa" value="{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->ssc_gpa }}">
                                    @if ($errors->has('ssc_gpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ssc_gpa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">HSC Year</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control{{ $errors->has('hsc_year') ? ' is-invalid' : '' }}" name="hsc_year" value="{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->hsc_year }}">
                                    @if ($errors->has('hsc_year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hsc_year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">HSC GPA</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control{{ $errors->has('hsc_gpa') ? ' is-invalid' : '' }}" name="hsc_gpa" value="{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->hsc_gpa }}">
                                    @if ($errors->has('hsc_gpa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hsc_gpa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Group</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="group">
                                      <option>--Select--</option>
                                      @foreach ($groups as $group)
                                        <option value="{{ $group->id }}"{{ ($group->id == App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->group_id)?'selected':'' }}>{{ $group->group_name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Adress</label>
                                <div class="col-md-10">
                                    <textarea type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" >{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->address }}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center m-auto">
                                <button type="submit" class="btn btn-primary">Update Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
