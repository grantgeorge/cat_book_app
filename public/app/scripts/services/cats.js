'use strict';

/**
 * @ngdoc service
 * @name catBookUiApp.cats
 * @description
 * # cats
 * Service in the catBookUiApp.
 */
angular.module('catBookUiApp')
  .factory('Cats', function ($resource) {

    return $resource('http://cat_book.dev/index.php/cats/:catId', null,
    {
      'update': { method: 'PUT', params:{},
        header: {
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      }
    });

  });
