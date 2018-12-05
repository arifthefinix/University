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
                      <h6 class="card-title text-bold">Notifications</h6>
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
                                @foreach ($alladminnotifications as $alladminnotification)
                                  <tr>
                                    <td>{{  $i++ }}</td>
                                    <td>{{ $alladminnotification->admin_notification_text }}</td>
                                    <td>{{ $alladminnotification->created_at->diffForHumans() }}</td>
                                    <td>
                                      <a href="{{ url('admin/notification/delete') }}/{{$alladminnotification->id}}" title="Delete" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
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
