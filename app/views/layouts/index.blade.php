<html>
<head>
	<title>Portal Layanan Publik</title>

	<link rel="stylesheet/less" type="text/css" href="{{ URL::to('assets/less/main.less') }}" />
	{{ HTML::script('assets/js/less.min.js') }}

	{{ HTML::script('assets/js/angular.min.js') }}
	{{ HTML::script('assets/js/jquery.min.js') }}


	{{ HTML::script('assets/controllers/PortalSidebarCtrl.js') }}

	@yield('js-script')




</head>
<body ng-app="sicantik_portal">

	{{ View::make('layouts._navbar') }}

	<div class="portal-body">
		<div class="header-hidden">

		</div>

		<div class="portal-title">
			<h3>@yield('page-title')</h3>
		</div>

		<div class="body-wrapper">

			@yield('body-article')

			<div class="body-sidebar" ng-controller="PortalSidebarCtrl">

				@yield('body-sidebar')

			</div>

		</div>

	</div>

	{{ View::make('layouts._footer') }}

	<div class="modal">
		<div class="modal-window">
			<div class="modal-title">
				asdf
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">

			</div>
		</div>
	</div>

</body>
</html>
