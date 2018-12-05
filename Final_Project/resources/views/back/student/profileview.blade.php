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
                <h4 class="page-title">My Profile</h4>
            </div>
            <div class="col-sm-5 col-8 text-right m-b-30">
                <a href="{{ url('student/profile/update') }}/{{ Auth::user()->id }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
            </div>
        </div>
        <div class="card-box">
            <div class="row">
                <div class="col-md-12">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img class="avatar" src="{{asset('storage/')}}/{{Auth::user()->user_image}}" alt=""></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 m-b-0">{{Auth::user()->name}}</h3>
                                        <div class="staff-id">Student</div>
                                        <div class="staff-id">Gender : {{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->gender }}</div>
                                        <div class="staff-id">Date of Birth : {{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->dob }}</div>
                                        <div class="staff-msg">
                                            <form class="" action="{{ route('studentimageupdate') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="">
                                                    <input type="file" class="form-group" name="user_image" required>
                                                </div>
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary">Update Picture</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <ul class="personal-info">
                                        <li>
                                            <span class="title">Phone:</span>
                                            <span class="text"><a href="#">{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->phone }}</a></span>
                                        </li>
                                        <li>
                                            <span class="title">Email:</span>
                                            <span class="text"><a href="#">{{Auth::user()->email}}</a></span>
                                        </li>
                                        <li>
                                            <span class="title">SSC Year:</span>
                                            <span class="text">{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->ssc_year }}</span>
                                        </li>
                                        <li>
                                            <span class="title">SSC GPA:</span>
                                            <span class="text">{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->ssc_gpa }}</span>
                                        </li>
                                        <li>
                                            <span class="title">HSC Year:</span>
                                            <span class="text">{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->hsc_year }}</span>
                                        </li>
                                        <li>
                                            <span class="title">HSC GPA:</span>
                                            <span class="text">{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->hsc_gpa }}</span>
                                        </li>
                                        <li>
                                            <span class="title">Group:</span>
                                            <span class="text">{{ App\Group::find(App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->group_id)->group_name }}</span>
                                        </li>
                                        <li>
                                            <span class="title">Address:</span>
                                            <span class="text">{{ App\student_info::where('user_id', '=', Auth::user()->id)->firstorFail()->address }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
