$app = angular.module('sicantik_portal', [])

.controller('KontakCtrl', ['$http', '$scope', '$sce',

    function($http, $scope, $sce) {
        $scope.doc = "";

        $scope.show_all = function() {
            $http.get('kontak/data').success(function(k_data) {
                $scope.portal_kontak_data = k_data;
                $scope.isi_informasi = $sce.trustAsHtml($scope.portal_kontak_data.isi_informasi);
            });
        }
        $scope.show_all();
    }
]);
