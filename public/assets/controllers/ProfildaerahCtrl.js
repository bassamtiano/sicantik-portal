$app = angular.module('sicantik_portal', [])

.controller('ProfildaerahCtrl', ['$http', '$scope', '$sce',

    function($http, $scope, $sce) {

        $scope.show_all = function() {
            $http.get('profil_daerah/data').success(function(pd_data) {
                $scope.portal_profil_daerah_data = pd_data;
                $scope.isi_informasi = $sce.trustAsHtml($scope.portal_profil_daerah_data.isi_informasi);
            });
        }

        $scope.show_all();
    }


]);
