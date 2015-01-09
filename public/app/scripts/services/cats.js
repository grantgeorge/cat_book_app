'use strict';

/**
 * @ngdoc service
 * @name catBookUiApp.cats
 * @description
 * # cats
 * Service in the catBookUiApp.
 */
angular.module('catBookUiApp')
  .factory('cats', function ($http) {

    // var obj = {content:null}

    // Simple GET request example :
    return $http.get('http://cat_book.dev/index.php/cats').
      success(function(data, status, headers, config) {
        // this callback will be called asynchronously
        // when the response is available
        // obj.content = data;
      }).
      error(function(data, status, headers, config) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });

  });
