'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:CatCtrl
 * @description
 * # CatCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('CatCtrl', function ($scope, $http, CatsModel, PostsModel,
  $routeParams) {

    if($routeParams.id) {
      CatsModel.getCat($routeParams.id)
        .then(function(result) {
          $scope.cat = result;
        });
      PostsModel.getPostsForCat($routeParams.id)
        .then(function(result) {
          $scope.posts = result;
        });
    }
    else {
      CatsModel.getCats()
        .then(function(result) {
          $scope.cats = result;
        });
    }

    $scope.editCat = function() {
      $scope.editing = true;
    }

    $scope.updateCat = function(data) {
      $scope.editing = false;
      // CatsModel.updateCat($scope.cat)
      //   .then(function(result) {
      //     $scope.cat = result;
      //   });
    }

  });
