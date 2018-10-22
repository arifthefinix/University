@extends('layouts.master')

@section('header')
  @include('back.inc.header')
@endsection


@section('sidebar')
  @include('back.inc.sidebar')
@endsection


@section('content')
    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-success"><i class="fa fa-money" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
              <h3>$998</h3>
              <span>Revenue</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
            <span class="dash-widget-icon bg-info"><i class="fa fa-user-o" aria-hidden="true"></i></span>
            <div class="dash-widget-info">
              <h3>1072</h3>
              <span>Users</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
            <span class="dash-widget-icon bg-warning"><i class="fa fa-files-o"></i></span>
            <div class="dash-widget-info">
              <h3>72</h3>
              <span>Projects</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
            <span class="dash-widget-icon bg-danger"><i class="fa fa-tasks" aria-hidden="true"></i></span>
            <div class="dash-widget-info">
              <h3>618</h3>
              <span>Tasks</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
                        <div class="panel panel-table">
                            <div class="panel-heading">
                                <h3 class="panel-title">Students</h3>
                            </div>
                            <div class="panel-body">
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
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="avatar">T</a>
                                                    <h2><a href="client-profile.html">Tressa Wexler <span>Manager</span></a></h2>
                                                </td>
                                                <td>tressawexler@example.com</td>
                                                <td>
                                                    <div class="dropdown action-label">
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
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
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
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
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
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
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="clients.html" class="text-primary">View all clients</a>
                            </div>
                        </div>
                    </div>
          <div class="col-sm-6">
              <div class="panel panel-table">
                  <div class="panel-heading">
                      <h3 class="panel-title">University</h3>
                  </div>
                  <div class="panel-body">
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
                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                          <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                        </ul>
                                      </div>
                                    </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="avatar">T</a>
                                                    <h2><a href="client-profile.html">Tressa Wexler <span>Manager</span></a></h2>
                                                </td>
                                                <td>tressawexler@example.com</td>
                                                <td>
                                                    <div class="dropdown action-label">
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
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
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
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
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
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
                                                        <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i>
															</a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
                                                            <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                                            <li><a href="#" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="clients.html" class="text-primary">View all clients</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
@endsection
