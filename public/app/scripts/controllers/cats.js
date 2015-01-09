'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:CatCtrl
 * @description
 * # CatCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('CatCtrl', function ($scope, $http, Cats, Posts,
  $routeParams, $resource, $location) {

    if($routeParams.id) {

      $scope.cat = Cats.get({ catId:$routeParams.id });

      $scope.posts = Posts.query({ cat_id:$routeParams.id });

    }
    else {
      $scope.cats = Cats.query();
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

    $scope.goToCat = function(id) {
      $location.path('/cats/'+id)
    }

  });
