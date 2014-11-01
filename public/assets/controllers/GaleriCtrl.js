$app = angular.module('sicantik_portal', [])

.controller('GaleriCtrl', ['$http', '$scope',
    function($http, $scope) {
        /* # Prepare Data ============================================================================================= */

        $scope.show_all = function() {
            $http.get('galeri/data').success(function(g_data) {
                $scope.admin_galeri_data = g_data;
            });
        }



        $scope.show_all();

        $scope.search = {};
        $scope.search = null;


    }

]);
