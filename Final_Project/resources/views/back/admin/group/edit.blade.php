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
        <h4 class="page-title">Update Group Name</h4>
      </div>
    </div>
    <div class="row">
      <div class="offset-md-2 col-md-6">
          <div class="card-box">
            @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
              <h4 class="card-title">Update <span class="text-primary"> {{$old_info->group_name}}</span></h4>
              <form action="{{ url('group/update') }}" method="post">
                @csrf
                  <div class="form-group">
                      <label>Group Name</label>
                      <input type="hidden"  name="group_id" value="{{ $old_info->id }}">
                      <input type="text" class="form-control{{ $errors->has('group_name') ? ' is-invalid' : '' }}" placeholder="Enter new group name" name="group_name" value="{{ $old_info->group_name }}">
                      @if ($errors->has('group_name'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('group_name') }}</strong>
                        </span>
                      @endif
                  </div>
                  <div class="text-center m-auto">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
