$app = angular.module('sicantik_portal', [])

.controller('HomeCtrl', ['$http', '$scope',

    function($http, $scope) {

        var fetch_limit = 50;

        /* # Prepare Data ============================================================================================= */

        $scope.show_all = function() {
            $http.get('data').success(function(ah_data) {
                $scope.admin_home_data = ah_data;
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

]);
