<!DOCTYPE html>
<html>
		<head>
    		<title>Admission Help desk</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('front_end/') }}/css/fontawesome.min.css">
        <link rel="stylesheet" href="{{ asset('front_end/') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('front_end/') }}/css/style.css">
    </head>
    <body>
    		<div class=" container-fluid text-center bg-primary p-0 header">
        		<h1>Admission Help Desk</h1>
        		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    				<span class="navbar-toggler-icon"></span>
			  				</button>
  							<div class="collapse navbar-collapse" id="navbarSupportedContent">
    								<ul class="navbar-nav mr-auto">
      									<li class="nav-item active">
        										<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      									</li>
      									<li class="nav-item dropdown">
        										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Universities</a>
        										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
																@php
																		$univers = App\University::all();
																@endphp
																@foreach ($univers as $univer)
																		<a class="dropdown-item" href="{{ url('uni') }}/{{ $univer->university_name }}">{{ $univer->university_name }}</a>
																@endforeach
      											</div>
      									</li>
				                <li class="nav-item">
				        						<a class="nav-link" href="{{ url('jobcicular') }}">Job Circulars</a>
				      					</li>
                				<li class="nav-item">
        										<a class="nav-link" href="{{ route('login')}}">Login</a>
      									</li>
  									</ul>
  							</div>
						</nav>
    	</div>
      @yield('content')
