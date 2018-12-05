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
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="dash-widget-icon bg-success"><i class="fa fa-university" aria-hidden="true"></i></span>
                    <div class="dash-widget-info">
                        <h3>{{ App\University::count() }}</h3>
                        <span>Universities</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="dash-widget-icon bg-success"><i class="fa fa-book" aria-hidden="true"></i></span>
                    <div class="dash-widget-info">
                        <h3>{{ App\Unit::count() }}</h3>
                        <span>Units</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="dash-widget-icon bg-success"><i class="fa fa-book" aria-hidden="true"></i></span>
                    <div class="dash-widget-info">
                        <h3>{{ App\Subject::count() }}</h3>
                        <span>Subjects</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="dash-widget-icon bg-success"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                    <div class="dash-widget-info">
                        <h3>{{ App\User::count() }}</h3>
                        <span>Students</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-table">
                    <div class="card-header bg-white">
                        <h4 class="card-title m-b-0">Notificaions</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped custom-table m-b-0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Notifications</th>
                            <th>Plublished</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $i=1;
                          @endphp
                          @foreach ($notifications as $notification)
                            <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{ $notification->notification_text }}</td>
                              <td>{{ $notification->created_at->diffForHumans() }}</td>
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
