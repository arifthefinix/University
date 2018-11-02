<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{route('studentdashboard')}}" class="logo">
                    <img src="{{asset('/back_end') }}/assets/img/logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <div class="page-title-box pull-left">
                <h3>Admission Help Desk</h3>
            </div>
            <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav user-menu pull-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-primary pull-right">0</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                    											<span class="avatar">
                    												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
                    											</span>
                    											<div class="media-body">
                    												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                    												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                    											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                    											<span class="avatar">V</span>
                    											<div class="media-body">
                    												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                    												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                    											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                    											<span class="avatar">L</span>
                    											<div class="media-body">
                    												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                    												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                    											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{asset('/storage') }}/{{ Auth::user()->user_image }}" width="40" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>{{ Auth::user()->name }}</span>
                    </a>
    					<div class="dropdown-menu">
    						<a class="dropdown-item" href="{{route('studentprofileview')}}">My Profile</a>
    						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
    						<a class="dropdown-item" href="{{route('studentchangepassword')}}">Change Password</a>
    						<a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a>
    					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                </div>
            </div>
        </div>
