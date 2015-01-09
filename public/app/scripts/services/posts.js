'use strict';

/**
 * @ngdoc service
 * @name catBookUiApp.posts
 * @description
 * # posts
 * Service in the catBookUiApp.
 */
angular.module('catBookUiApp')
  .service('PostsModel', function ($http) {

    var model = this,
      URLS = {
        FETCH: 'http://cat_book.dev/index.php/posts'
      },
      posts;

    function extract(result) {
      return result.data;
    }

    function cachePosts(result) {
      posts = extract(result);
      return posts;
    }

    model.getPosts = function() {
      return $http.get(URLS.FETCH).then(cachePosts);
    };

    model.getPostsForCat = function(id) {
      return $http.get(URLS.FETCH, {
        params: { cat_id: id }
      }).then(cachePosts);
    };

  });
