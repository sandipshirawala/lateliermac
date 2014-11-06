var productApp = angular.module('productApp', ['mainCtrl', 'productService'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
	});
