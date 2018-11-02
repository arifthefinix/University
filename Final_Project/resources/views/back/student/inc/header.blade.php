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
