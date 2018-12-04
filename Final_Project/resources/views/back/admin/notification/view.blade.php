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
        <h4 class="page-title">List of all Notifications</h4>
      </div>
    </div>
    <div class="row">
      <div class="offset-sm-2 col-sm-8">
          <div class="card-box">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
              <div class="card-block">
                  <h6 class="card-title text-bold">Notification List</h6>
                  <table class="datatable table table-stripped table-responsive text-center">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Name</th>
                              <th>Created at</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($notifications as $key => $notification)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $notification->notification_text }}</td>
                                <td>{{ $notification->created_at->diffForHumans() }}</td>
                                <td>
                                  <a href="{{ url('/notification/delete') }}/{{ $notification->id }}" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
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
