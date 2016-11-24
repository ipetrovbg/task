;(function(){

	'use strict';

		angular.module('FooBarApp')
			.factory('mainService', MainService);
			MainService.$inject = ['$http', 'app'];

			function MainService( $http, app ){
				var service = {
					getAllFooBars: getAllFooBars,
					getFooBarById: getFooBarById,
					createFooBar: createFooBar,
					updateFooBar: updateFooBar,
					deleteFooBar: deleteFooBar,
				}
				return service;

				function getAllFooBars(){
					return $http.get(app.api + 'foo-bar')
						.then(function(response){
							return response.data;
						});
				}

				function getFooBarById( id ){
					return $http.get( app.api + 'foo-bar/'+ id )
						.then(function(response){
							return response.data;
						});
				}

				function createFooBar( data ){
					return $http({
							url: app.api + 'foo-bar/create',
							method: 'POST',
							data: {
								name: data
							}
						}).then(function(response){
							return response.data;
						});
				}

				function updateFooBar( data ){
					return $http({
							url: app.api + 'foo-bar/update',
							method: 'PUT',
							data: {
								data: data
							}
						}).then(function(response){
							return response.data;
						});
				}

				function deleteFooBar( id ){
					return $http({
							url: app.api + 'foo-bar/delete/' + id,
							method: 'DELETE',
							data: {
								id: id
							}
						}).then(function(response){
							return response.data;
						});
				}
			}

})();