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
        <h4 class="page-title">List of all Groups</h4>
      </div>
    </div>
    <div class="row">
      <div class="offset-sm-2 col-sm-8">
        <div class="card-box">
          <div class="card-block">
            <h6 class="card-title text-bold">Group List</h6>
              @if(session('status'))
                <div class="alert alert-danger">
                  {{session('status')}}
                </div>
              @endif
                <table class="datatable table table-stripped">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=1;
                    @endphp
                    @foreach ($groups as $key => $group)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $group->group_name }}</td>
                        <td>
                          <a href="{{ url('group/edit') }}/{{ $group->id }}" class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
                          <a href="{{ url('group/delete') }}/{{ $group->id }}" class="btn btn-danger"> <i class="fa fa-trash-o"></i></a>
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
