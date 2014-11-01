$app = angular.module('sicantik_portal', [])

.controller('JenisPerizinanCtrl', ['$http', '$scope',

    function($http, $scope) {



        $scope.show_all = function() {
            $http.get('http://localhost/sicantiklara/public/portal/jenis_perizinan/data').success(function(jp_data) {
                $scope.portal_jenis_perizinan_data = jp_data;
            });
        }

        $scope.show_all();

        $scope.opsi_cari = '$';
        $scope.search = {};
        $scope.search = "";

    }


]);
