'use strict';

describe('Service: cats', function () {

  // load the service's module
  beforeEach(module('catBookUiApp'));

  // instantiate service
  var cats;
  beforeEach(inject(function (_cats_) {
    cats = _cats_;
  }));

  it('should do something', function () {
    expect(!!cats).toBe(true);
  });

});
