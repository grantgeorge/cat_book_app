'use strict';

/**
 * @ngdoc function
 * @name catBookUiApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the catBookUiApp
 */
angular.module('catBookUiApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
