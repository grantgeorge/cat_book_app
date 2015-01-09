'use strict';

/**
 * @ngdoc service
 * @name catBookUiApp.cats
 * @description
 * # posts
 * Service in the catBookUiApp.
 */
angular.module('catBookUiApp')
  .factory('Posts', function ($resource) {

    return $resource('http://cat_book.dev/index.php/posts/:postId', null,
    {
      'update': { method: 'PUT', params:{},
        header: {
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      }
    });

  });
