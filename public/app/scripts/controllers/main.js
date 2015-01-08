'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('MainCtrl', function ($scope, $http) {

    // Simple GET request example :
    $http.get('http://cat_book.dev/index.php/cats').
      success(function(data, status, headers, config) {
        // this callback will be called asynchronously
        // when the response is available
        console.log(data);
        $scope.cats = data;
      }).
      error(function(data, status, headers, config) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });

  });
