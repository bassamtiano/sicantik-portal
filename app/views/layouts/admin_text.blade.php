<html>
<head>
	<title></title>
	

	{{ HTML::style('assets/css/admin.css') }}
	{{ HTML::style('assets/css/main.css') }}

	{{ HTML::script('assets/js/jquery.min.js') }}
	{{ HTML::script('assets/js/angular.min.js') }}

	@yield('page-style')	
	@yield('page-script')

</head>
<body ng-app="sicantik_portal">

<div class="admin-header snap">

	<div class="admin-banner">
		{{ HTML::image('assets/img/portal_kominfo.jpg') }}
	</div>

	<div class="header-navbar">

			<div class="navbar-item">

				@include('layouts._navbar_admin')

			</div>

		</div>

	</div>
</div>

<!-- <div class="testt">

</div> -->

<div class="page-table" @yield('angular-controller') >

	<div class="page-title">
		<p>
			@yield('page-title')
		</p>
	</div>

	@yield('page-content')

</div>

<div class="portal-footer">
	Copyright ©2014 Kemkominfo v 4.0
</div>

</body>
</html>