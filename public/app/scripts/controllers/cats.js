'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:CatCtrl
 * @description
 * # CatCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('CatCtrl', function ($scope, $http, CatsModel) {

    CatsModel.getCats()
      .then(function(result) {
        $scope.cats = result;
        console.log(result);
      });

  });
