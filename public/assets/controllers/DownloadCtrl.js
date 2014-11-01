$app = angular.module('sicantik_portal', [])

.controller('DownloadCtrl', ['$http', '$scope',

    function ( $http, $scope) {

        var fetch_limit = 50;

        /* # Prepare Data ============================================================================================= */

        $scope.show_all = function() {
            $http.get('daftar_download/data').success(function(dd_data) {
                $scope.daftar_download_data = dd_data;
            });
        }

        $scope.show_all();

        $scope.search = {};
        $scope.search = null;

        
    }

]);
