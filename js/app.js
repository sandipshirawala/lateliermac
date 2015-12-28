var productApp = angular.module('productApp', ['mainCtrl', 'productService', 'ui.router'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
	});
productApp.config(function($stateProvider, $urlRouterProvider, $locationProvider, $httpProvider) {
    $urlRouterProvider.otherwise("/");
    $locationProvider.html5Mode(true);

    $stateProvider
      .state('productsHome', {
          url: '/',
          templateUrl: "/js/partials/products.html",
      })
      .state('category', {
        url: "/:category",
        templateUrl: "/js/partials/products.html",
      });
});
