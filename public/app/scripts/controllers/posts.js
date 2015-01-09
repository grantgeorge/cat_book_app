'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:PostsCtrl
 * @description
 * # PostsCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('PostsCtrl', function ($scope, PostsModel) {

    PostsModel.getPosts()
      .then(function(result) {
        $scope.posts = result;
        console.log($scope.posts);
      })

  });
