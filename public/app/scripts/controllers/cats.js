'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:CatCtrl
 * @description
 * # CatCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('CatCtrl', function ($scope, $http, Cats, PostsModel,
  $routeParams, $resource) {

    if($routeParams.id) {

      $scope.cat = Cats.get({ catId:$routeParams.id });

    }
    else {
      Cats.getCats()
        .then(function(result) {
          $scope.cats = result;
        });
    }

    $scope.editCat = function() {
      $scope.editing = true;
    }

    $scope.updateCat = function(data) {
      $scope.editing = false;
      Cats.update({ catId: $scope.cat.id }, $scope.cat);
    }

    $scope.deleteCat = function(data) {
      $scope.editing = false;
      Cats.delete({ catId: $scope.cat.id });
    }

  });
