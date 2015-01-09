'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:PostsCtrl
 * @description
 * # PostsCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('PostsCtrl', function ($scope, posts) {

    posts.success(function(data) {
      $scope.posts = data;
      console.log($scope.posts);
    })

  });
