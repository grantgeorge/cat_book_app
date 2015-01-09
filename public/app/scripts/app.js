'use strict';

/**
 * @ngdoc overview
 * @name catBookUiApp
 * @description
 * # catBookUiApp
 *
 * Main module of the application.
 */
angular
  .module('catBookUiApp', [
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngMessages',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/cats', {
        templateUrl: 'views/cats.html',
        controller: 'CatCtrl'
      })
      .when('/cats/:id', {
        templateUrl: 'views/cat.html',
        controller: 'CatCtrl'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl'
      })
      .when('/posts', {
        templateUrl: 'views/posts.html',
        controller: 'PostsCtrl'
      })
      .otherwise({
        redirectTo: '/cats'
      });
  });
