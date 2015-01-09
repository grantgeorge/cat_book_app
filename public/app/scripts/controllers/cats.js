'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:CatCtrl
 * @description
 * # CatCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('CatCtrl', function ($scope, $http, cats, posts) {

    cats.success(function(data) {
      $scope.cats = data;
      // console.log($scope.cats);
    });

    posts.success(function(data) {
      $scope.posts = data;
      console.log($scope.posts);
    })

  });
