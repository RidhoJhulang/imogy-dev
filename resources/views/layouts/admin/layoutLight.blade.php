<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>IMOGY - DEV</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link href="{{url('img/imoicon.png')}}" rel="icon" type="image/x-icon">
		@yield('head')
		<link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{url('AdminLTE/dist/css/AdminLTE.min.css')}}">
		<link rel="stylesheet" href="{{url('AdminLTE/dist/css/skins/_all-skins.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<a href="{{url('admin')}}" class="logo"  style="background-color: #2b4e62">
					<span class="logo-mini"><img src="{{url('img/iconwhitek.png')}}" style="padding:5px;width: 45px; height: 45px;"></span>
					<span class="logo-lg" style="background-color: #2b4e62"><img src="{{url('img/bar.png')}}" width="70px" align="center"></span>
				</a>
				<nav class="navbar navbar-static-top" style=" background-color: #2b4e62">
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>

					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									@if(Auth::user()->foto == "0")
										<img src="{{url('img/no-image.png')}}" class="user-image" alt="User Image">
									@else
										<img src="{{url(Auth::user()->foto)}}" class="user-image" alt="User Image">
									@endif
									<span class="hidden-xs">{{Auth::user()->name}}</span>
								</a>
								<ul class="dropdown-menu">
									<li class="user-header" style="background-color:#222d32">
										@if(Auth::user()->foto == "0")
											<img src="{{url('img/no-image.png')}}" class="img-circle" alt="User Image">
										@else
											<img src="{{url(Auth::user()->foto)}}" class="img-circle" alt="User Image">
										@endif
										<p>
											{{Auth::user()->name}} 
											<small>{{Auth::user()->jabatan}}</small>
										</p>
									</li>
									
									<li class="user-footer">
										<div class="pull-left">
											<a href="{{ url('profile')}}" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
												Logout
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="main-sidebar">
				<section class="sidebar">
					<div class="user-panel">
						<div class="pull-left image">
							@if(Auth::user()->foto == "0")
								<img src="{{url('img/no-image.png')}}" class="img-circle" alt="User Image">
							@else
								<img src="{{url(Auth::user()->foto)}}" class="img-circle" alt="User Image">
							@endif
						</div>
						<div class="pull-left info">
							<p>{{Auth::user()->name}}</p>
							<a href="#">{{Auth::user()->jabatan}}</a>
						</div>
					</div>
					
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header" onclick="url()">
							Main Menu
						</li>
						<li class="" id="dashboard">
							<a href="admin">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>
						<li class="" id="absen">
							<a href="{{ url('absen')}}">
								<i class="fa fa-clock-o"></i>
								<span>AOGY</span>
							</a>
						</li>
						<li class="" id="atisygy">
							<a href="{{ url('/tisygy')}}">
								<i class="fa fa-paper-plane"></i>
								<span>TISYGY</span>
							</a>
						</li>
						<li class="" id="usermanage">
							<a href="{{ url('usermanage')}}">
								<i class="fa fa-users"></i>
								<span>Users Management</span>
							</a>
						</li>
						<li class="" id="schedule">
							<a href="{{ url('schedule')}}">
								<i class="fa fa-flag-o"></i>
								<span>Shifting Schedule</span>
							</a>
						</li>
						<li class="" id="location">
							<a href="{{ url('location')}}">
								<i class="fa fa-location-arrow"></i>
								<span>Set Absent Location</span>
							</a>
						</li>
						<li class="active treeview" id="project">
							<a href="#">
								<i class="fa fa-dashboard"></i> 
								<span>Project Manage</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="{{ url('project')}}"><i class="fa fa-circle-o"></i>Overview</a>
								</li>
								<li>
									<a href="{{ url('project/manage')}}"><i class="fa fa-circle-o"></i>Manage</a>
								</li>
								<li>
									<a href="{{ url('project/setting')}}"><i class="fa fa-circle-o"></i>Setting</a>
								</li>
							</ul>
						</li>
						<!-- <li class="" id="sycal">
							<a href="{{ url('asycal')}}">
								<i class="fa fa-calendar"></i>
								<span>SYCAL</span>
							</a>
						</li>
						<li class="" id="announcement">
							<a href="{{ url('announcement')}}">
								<i class="fa fa-bookmark-o"></i>
								<span>Announcement</span>
							</a>
						</li>
						<li class="" id="announcement">
							<a href="{{ url('test_page')}}">
								<i class="fa fa-test-o"></i>
								<span>Test Page</span>
							</a>
						</li> -->
					</ul>
				</section>
			</aside>
			@yield('content')
		</div>

		<script src="{{url('plugins/jQuery/jquery-3.1.1.min.js')}}"></script>
		<script src="{{url('plugins/jQueryUI/jquery-ui.min.js')}}"></script>
		<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{url('plugins/fastclick/fastclick.js')}}"></script>
		<script src="{{url('dist/js/adminlte.min.js')}}"></script>
		<script src="{{url('dist/js/adminlte.min.js')}}"></script>
		@yield('script')
	</body>
</html>