$app = angular.module('sicantik_portal', [])

.controller('InfoPublikCtrl', ['$http', '$scope',
	function($http, $scope) {

		var fetch_limit = 20;

		/* # Prepare Data ============================================================================================= */
		$scope.show_all = function() {
			$http.get('info_publik/data').success(function(ip_data) {
				$scope.portal_info_publik_data = ip_data;
			});

		}

		$scope.show_all();

		/* # Isi Berita Lengkap ======================================================================================= */

		// $scope.isi_berita = function() {
		// 	$http.get('info_publik/data_detail/{id}').success(function(ipdd_data) {
		// 		$scope.portal_info_publik_data_detail = ipdd_data;
		// 	});
		// }
		//
		// $scope.isi_berita();

		/* # Filter Data ============================================================================================== */

		$scope.opsi_cari = '$';
		$scope.search = {};
		$scope.displayed = fetch_limit;

		$scope.loadMore = function() {
			$scope.displayed += fetch_limit;
		}


		$scope.portal_info_publik_data;

		/* # Modal ==================================================================================================== */


	}
]);
