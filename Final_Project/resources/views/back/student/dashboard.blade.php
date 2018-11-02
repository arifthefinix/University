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
                        <span>Users</span>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-table">
                    <div class="card-header bg-white">
                        <h4 class="card-title m-b-0">Last 10 Students</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped custom-table m-b-0">
                        <thead>
                          <tr>
                            <th style="min-width:200px;">Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="min-width:200px;">
                              <a href="#" class="avatar">B</a>
                              <h2><a href="client-profile.html">Barry Cuda <span>CEO</span></a></h2>
                            </td>
                            <td>barrycuda@example.com</td>
                            <td>
                              <div class="dropdown action-label">
                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active
                                  </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0)" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0)" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="#" class="avatar">T</a>
                              <h2><a href="client-profile.html">Tressa Wexler <span>Manager</span></a></h2>
                            </td>
                            <td>tressawexler@example.com</td>
                            <td>
                              <div class="dropdown action-label">
                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                  </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0)" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0)" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="client-profile.html" class="avatar">R</a>
                              <h2><a href="client-profile.html">Ruby Bartlett <span>CEO</span></a></h2>
                            </td>
                            <td>rubybartlett@example.com</td>
                            <td>
                              <div class="dropdown action-label">
                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                  </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0)" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0)" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="client-profile.html" class="avatar">M</a>
                              <h2><a href="client-profile.html"> Misty Tison <span>CEO</span></a></h2>
                            </td>
                            <td>mistytison@example.com</td>
                            <td>
                              <div class="dropdown action-label">
                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active
                                  </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0)" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0)" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="client-profile.html" class="avatar">D</a>
                              <h2><a href="client-profile.html"> Daniel Deacon <span>CEO</span></a></h2>
                            </td>
                            <td>danieldeacon@example.com</td>
                            <td>
                              <div class="dropdown action-label">
                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                  </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                  <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                </div>
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0)" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0)" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <a href="clients.html" class="text-muted">View all clients</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
