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
            <a href="{{ url('admin/profile/update') }}/{{ Auth::user()->id }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
        </div>
    </div>
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
              <div class="card-box">
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
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 m-b-0">{{Auth::user()->name}}</h3>
                                    <div class="staff-id">Administrator</div>
                                    <div class="staff-msg">
                                      <form class="" action="{{ route('adminimageupdate') }}" method="post" enctype="multipart/form-data">
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
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text"><a href="#">{{Auth::user()->email}}</a></span>
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
