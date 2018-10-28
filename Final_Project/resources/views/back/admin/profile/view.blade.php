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
        <div class="col-sm-7 col-4">
            <h4 class="page-title">My Profile</h4>
        </div>

        <div class="col-sm-5 col-8 text-right m-b-30">
            <a href="#" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
        </div>
    </div>
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img class="avatar" src="{{asset('storage/')}}/{{Auth::user()->user_image}}" alt=""></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 m-b-0">{{Auth::user()->name}}</h3>
                                    <!-- <small class="text-muted">Web Designer</small> -->
                                    <div class="staff-id">Administrator</div>
                                    <!-- <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div> -->
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Phone:</span>
                                        <span class="text"><a href="#">9876543210</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text"><a href="#">{{Auth::user()->email}}</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Birthday:</span>
                                        <span class="text">24th July</span>
                                    </li>
                                    <li>
                                        <span class="title">Address:</span>
                                        <span class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</span>
                                    </li>
                                    <li>
                                        <span class="title">Gender:</span>
                                        <span class="text">Male</span>
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
