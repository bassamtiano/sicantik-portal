var fetch_limit = 50;

$app = angular.module('sicantik_portal', [])

.controller('AdminInfoPublikCtrl', ['$http', '$scope',
	function ($http, $scope) {

		/* # Prepare Data ============================================================================================= */

		$scope.show_all = function() {
			$http.get('info_publik/data').success(function(aip_data) {
				$scope.admin_info_publik_data = aip_data;
			});
		}



		$scope.show_all();

		$scope.search = {};
		$scope.search = null;
		$scope.displayed = fetch_limit;

		$scope.loadMore = function() {
			$scope.displayed += fetch_limit;
		}

		/* # Opsi ===================================================================================================== */

	}
])

.controller('AdminProfilDaerahCtrl', ['$http', '$scope',

	function($http, $scope) {

	}

])

.controller('AdminDownloadCtrl', ['$http', '$scope',

	function($http, $scope) {

	}

])

.controller('AdminGaleriCtrl', ['$http', '$scope',

	function($http, $scope) {

	}

])

.controller('AdminKontakKamiCtrl', ['$http', '$scope',

	function($http, $scope) {

	}

])

.controller('AdminPengaturanWebsiteCtrl', ['$http', '$scope',

	function($http, $scope) {

	}

])

.controller('AdminJajakCtrl', ['$http', '$scope',

	function($http, $scope) {
		/* # Prepare Data ============================================================================================= */

		$scope.show_all = function() {
			$http.get('jajak/data').success(function(aj_data) {
				$scope.admin_jajak_data = aj_data;
			});
		}



		$scope.show_all();

		$scope.search = {};
		$scope.search = null;
		$scope.displayed = fetch_limit;

		$scope.loadMore = function() {
			$scope.displayed += fetch_limit;
		}
	}

])

.controller('AdminUserCtrl', ['$http', '$scope',

	function($http, $scope) {

		/* # Prepare Data ============================================================================================= */

		$scope.show_all = function() {
			$http.get('admin_user/data').success(function(aau_data) {
				$scope.admin_admin_user_data = aau_data;
			});
		}



		$scope.show_all();

		$scope.search = {};
		$scope.search = null;
		$scope.displayed = fetch_limit;

		$scope.loadMore = function() {
			$scope.displayed += fetch_limit;
		}

	}

]);
