;(function(){

	'use strict';

	angular.module('FooBarApp', ['ngMessages'], function($interpolateProvider) {
	        $interpolateProvider.startSymbol('<%');
	        $interpolateProvider.endSymbol('%>');
	    })
		.constant("app", {
	        "url": "http://localhost:8000",
	        "api": "http://localhost:8000/api/"
	    });

})();