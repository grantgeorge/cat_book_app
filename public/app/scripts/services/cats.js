'use strict';

/**
 * @ngdoc service
 * @name catBookUiApp.cats
 * @description
 * # cats
 * Service in the catBookUiApp.
 */
angular.module('catBookUiApp')
  .service('CatsModel', function ($http) {

    var model = this,
      URLS = {
        FETCH: 'http://cat_book.dev/index.php/cats'
      },
      cats;

    function extract(result) {
      return result.data;
    }

    function cacheCats(result) {
      cats = extract(result);
      return cats;
    }

    model.getCats = function() {
      return $http.get(URLS.FETCH).then(cacheCats);
    };

  });
