
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="">
                            <a href="{{route('admindasboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-users" aria-hidden="true"></i> <span> Group</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('group.create')}}">Add Group</a></li>
                                <li><a href="{{route('group.index')}}">All Groups</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-university" aria-hidden="true"></i></i> <span> Universities</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('university.create')}}">Add University</a></li>
                                <li><a href="{{route('university.index')}}">All Universities</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-university" aria-hidden="true"></i></i> <span>University Images</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('image.create')}}">Add Images</a></li>
                                <li><a href="{{route('image.index')}}">All Images</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-university" aria-hidden="true"></i></i> <span>University Units</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('unit.create')}}">Add Unit</a></li>
                                <li><a href="{{route('unit.index')}}">All Units</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-university" aria-hidden="true"></i></i> <span>Subjects</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('subject.create')}}">Add Subject</a></li>
                                <li><a href="{{route('subject.index')}}">All Subjects</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></i> <span>Student Notifications</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('notification.create')}}">Add Notification</a></li>
                                <li><a href="{{route('notification.index')}}">All Notifications</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="{{ route('allstudent') }}"><i class="fa fa-users"></i>Students List</a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i> <span>Exam</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                              <li>
                                  <a href="{{ route('examsubjects') }}"><span>Subject</span></a>
                              </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Questions</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="{{ route('addquestion') }}"><span>Add Question</span></a></li>
                                        <li><a href="{{ route('allquestion') }}"><span>All Questions</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></i> <span>Job Circular</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{route('addjob')}}">Add Circular</a></li>
                                <li><a href="{{route('alljob')}}">All Circulars</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
