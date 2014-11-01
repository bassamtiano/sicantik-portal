$app = angular.module('sicantik_portal', [])

.controller('LayananOnlinePendaftaranOnlineCtrl', ['$http', '$scope',

	function($http, $scope) {

		/* # Opsi ===================================================================================================== */

		$scope.propinsi_pemohon = "";
		$scope.kabupaten_pemohon = "";
		$scope.kecamatan_pemohon = "";

		$scope.propinsi_perusahaan = "";
		$scope.kabupaten_perusahaan = "";
		$scope.kecamatan_perusahaan = "";

		/* # Opsi ===================================================================================================== */

		$scope.get_jenis_perizinan = function() {
			$http.get('http://localhost/sicantiklara/public/portal/jenis_perizinan/data').success(function(pjper_data) {
				$scope.portal_jenis_perizinan_data = pjper_data;
			});

		}

		$scope.get_propinsi = function() {
			$scope.aaa = $scope.propinsi_pemohon;
			$http.get('http://localhost/sicantiklara/public/portal/propinsi/data').success(function(pjp_data) {
				$scope.portal_propinsi_data = pjp_data;
			});
		}

		$scope.$watch('propinsi_pemohon', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kabupaten/data/' + $scope.propinsi_pemohon.id ).success(function(pkab_data) {
				$scope.portal_kabupaten_data = pkab_data;
			});

			$scope.portal_kecamatan_data = "";
			$scope.portal_kelurahan_data = "";
		});

		$scope.$watch('kabupaten_pemohon', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kecamatan/data/' + $scope.kabupaten_pemohon.id ).success(function(pkec_data) {
				$scope.portal_kecamatan_data = pkec_data;
			});

			$scope.portal_kelurahan_data = "";
		});

		$scope.$watch('kecamatan_pemohon', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kelurahan/data/' + $scope.kecamatan_pemohon.id ).success(function(pkel_data) {
				$scope.portal_kelurahan_data = pkel_data;
			});
		});

		$scope.$watch('propinsi_perusahaan', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kabupaten/data/' + $scope.propinsi_perusahaan.id ).success(function(pkabp_data) {
				$scope.portal_kabupaten_perusahaan_data = pkabp_data;
			});

			$scope.portal_kecamatan_perusahaan_data = "";
			$scope.portal_kelurahan_perusahaan_data = "";
		});

		$scope.$watch('kabupaten_perusahaan', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kecamatan/data/' + $scope.kabupaten_perusahaan.id ).success(function(pkecp_data) {
				$scope.portal_kecamatan_perusahaan_data = pkecp_data;
			});
			$scope.portal_kelurahan_perusahaan_data = "";
		});

		$scope.$watch('kecamatan_perusahaan', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kelurahan/data/' + $scope.kecamatan_perusahaan.id ).success(function(pkelp_data) {
				$scope.portal_kelurahan_perusahaan_data = pkelp_data;
			});
		});

		$scope.get_jenis_perizinan();
		$scope.get_propinsi();

	}

])

.controller('LayananOnlinePengaduanOnlineCtrl', ['$http', '$scope',

	function($http, $scope) {

		/* # Prepare Data ============================================================================================= */


		/* # Opsi ===================================================================================================== */

		$scope.propinsi_pemohon = "";
		$scope.kabupaten_pemohon = "";
		$scope.kecamatan_pemohon = "";

		$scope.get_jenis_pengaduan = function() {
			$http.get('http://localhost/sicantiklara/public/portal/jenis_pengaduan/data').success(function(pjp_data) {
				$scope.portal_jenis_pengaduan_data = pjp_data;
			});
		}

		$scope.get_propinsi = function() {
			$scope.aaa = $scope.propinsi_pemohon;
			$http.get('http://localhost/sicantiklara/public/portal/propinsi/data').success(function(pjp_data) {
				$scope.portal_propinsi_data = pjp_data;
			});
		}

		$scope.$watch('propinsi_pemohon', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kabupaten/data/' + $scope.propinsi_pemohon.id ).success(function(pkab_data) {
				$scope.portal_kabupaten_data = pkab_data;
			});
		});

		$scope.$watch('kabupaten_pemohon', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kecamatan/data/' + $scope.kabupaten_pemohon.id ).success(function(pkec_data) {
				$scope.portal_kecamatan_data = pkec_data;
			});

		});

		$scope.$watch('kecamatan_pemohon', function() {
			$http.get('http://localhost/sicantiklara/public/portal/kelurahan/data/' + $scope.kecamatan_pemohon.id ).success(function(pkel_data) {
				$scope.portal_kelurahan_data = pkel_data;
			});
		});

		$scope.get_propinsi();
		$scope.get_jenis_pengaduan();


	}

]);
