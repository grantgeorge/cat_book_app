'use strict';

/**
 * @ngdoc service
 * @name catBookUiApp.cats
 * @description
 * # cats
 * Service in the catBookUiApp.
 */
angular.module('catBookUiApp')
  .service('cats', function () {
    // Simple GET request example :
    $http.get('http://cat_book.dev/index.php/posts').
      success(function(data, status, headers, config) {
        // this callback will be called asynchronously
        // when the response is available
        console.log(data);
      }).
      error(function(data, status, headers, config) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
  });
