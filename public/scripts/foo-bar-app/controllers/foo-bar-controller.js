;(function(){

	'use strict';

	angular.module('FooBarApp')
		.controller('FooBarController', FooBarController);

		FooBarController.$inject = ['mainService'];

		function FooBarController( mainService ){
			var vm = this;

			vm.message = '';
					
			bootstrap();

			function bootstrap(){
				mainService.getAllFooBars()
				.then(function(response){
					vm.fooBars = response;
				});

				mainService.getFooBarById( window.fooBar )
					.then(function(response){
						vm.fooBar = response;
					});
			}

				vm.createFooBar = function(){
					if(vm.fooBarName){
						if(vm.fooBarName.length){
							mainService.createFooBar( vm.fooBarName )
								.then(function(response){
									console.log(response.status);
									if(response.status){
										vm.message = "Foo Bar was saved!";
										vm.fooBarName = ' ';
									}else{
										vm.message = "Foo Bar was not saved!";
									}
								});
						}
					}
				}

				vm.updateFooBar = function(){
					mainService.updateFooBar( vm.fooBar )
						.then(function(response){
							if(response.status){
								vm.message = "Foo Bar was updated!";
							}else{
								vm.message = "Foo Bar was not updated!";
							}
						})
				}

				vm.deleteFooBar = function( id, index ){
					vm.fooBars.splice(index, 1);
					mainService.deleteFooBar(id)
					.then(function(response){
						bootstrap();
					});					
				}
		}

})();