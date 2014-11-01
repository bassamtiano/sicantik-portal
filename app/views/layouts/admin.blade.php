<html>
<head>
	<title></title>


	<link rel="stylesheet/less" type="text/css" href="{{ URL::to('assets/less/admin.less') }}" />
	<link rel="stylesheet/less" type="text/css" href="{{ URL::to('assets/less/main.less') }}" />
	{{ HTML::script('assets/js/less.min.js') }}

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

	<div class="table-nav">
		<div class="nav-menu">
			<div class="menu-left">
				&nbsp;
				@yield('menu-left')

			</div>
			<div class="menu-right">

				@yield('menu-right')




			</div>
		</div>
		<div class="nav-table">

			@yield('table-nav')


		</div>
	</div>

	<div class="table-content">

		@yield('table-content')

	</div>
</div>

<div class="portal-footer">
	Copyright ©2014 Kemkominfo v 4.0
</div>

</body>
</html>
