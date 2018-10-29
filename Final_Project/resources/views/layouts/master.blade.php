<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/back_end') }}/assets/img/favicon.png">
    <title>Admission Help Desk</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/back_end') }}/assets/css/style.css">
</head>
  @yield('header')

  @yield('sidebar')

  @yield('content')
  </div>
  </div>
  <div class="sidebar-overlay" data-reff=""></div>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/popper.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/jquery.slimscroll.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/select2.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/moment.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/plugins/morris/morris.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/plugins/raphael/raphael-min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/toastr.min.js"></script>
   <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="{{asset('/back_end') }}/assets/js/app.js"></script>
  @yield('footer_script')
</body>
</html>
