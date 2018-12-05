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
          <h4 class="page-title">All Notifications</h4>
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
                  <h6 class="card-title text-bold">Notifications</h6>
                  <a href="{{ route('alladminnotification') }}" class="btn btn-primary float-right">View all</a>
                  <table class="datatable table table-stripped table-responsive text-center">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Notification Text</th>
                              <th>Created at</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                          $i=1;
                        @endphp
                          @foreach ($notifications as $notification)
                            <tr>
                                <td>{{  $i++ }}</td>
                                <td>{{ $notification->admin_notification_text }}</td>
                                <td>{{ $notification->created_at->diffForHumans() }}</td>
                                <td>
                                  <a href="{{ url('admin/notification/markread') }}/{{$notification->id}}" title="Mark as read" class="btn btn-primary"> <i class="fa fa-check"></i></a>
                                  <a href="{{ url('admin/notification/delete') }}/{{$notification->id}}" title="Delete" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
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
