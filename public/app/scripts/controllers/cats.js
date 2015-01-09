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
      console.log('get one');
      CatsModel.getCat($routeParams.id)
        .then(function(result) {
          $scope.cat = result;
          console.log(result);
        });
      PostsModel.getPostsForCat($routeParams.id)
        .then(function(result) {
          $scope.posts = result;
          console.log(result);
        });
    }
    else {
      CatsModel.getCats()
        .then(function(result) {
          $scope.cats = result;
          console.log(result);
        });
    }

  });
