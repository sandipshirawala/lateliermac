angular.module('mainCtrl', [])

	.controller('mainController', function($scope, $http, Product) {

		// Declare mes variables
		$scope.commentData = {};
		$scope.updateData = {};
		$scope.followData = {};
		$scope.subData = {};
		$scope.loading = true;

		var uri = window.location.href.split("/");
		var value = uri[6];
		//RegExp. all numbers digits (0 a 9 et +)
	    var threadid = /\d/g;

		// Récupère les différentes catégories et les affiche
		if(window.location.pathname == '/lateliermac/products'){
			console.log(window.location.pathname);
			Product.getproducts(1)
				.success(function(data){
					$('.prodindex').fadeIn();
					$scope.products = data;
					$scope.loading = false;
				});
		}else if(window.location.pathname == '/lateliermac/admin/products'){
			Product.getproducts(1)
				.success(function(getData){
					$scope.products = getData;
					$scope.loading = false;
				});
		};


		/**
		* Affiche les threads par sous_catégorie
		* @return data
		**/
		$scope.getProductsByCat = function(id){
			$('.prodindex').hide();
			$('.tab1').hide();
			Product.getproducts(id)
				.success(function(getData){
					$scope.products = getData;
					$('.prodindex').fadeIn();
					$('.carousel').carousel();
					$('.tab1').fadeIn();
				})
				.error(function(data){
					console.log(data);
				});
		};


		/**
		* voir une d'annonce
		* @return old data
		**/
		$scope.showThread = function(id) {
			$('.onethread').hide();
			Product.show(id)
				.success(function(data){
					$scope.onethreads = data;
					$('.onethread').fadeIn();
					//$scope.loading = false;
				});
		};



		/**
		* Affiche les sous catégories
		* @return data
		**/
		$scope.getSubCategories = function(id){
		//$scope.loading = true;
			Product.getsub(id)
				.success(function(getData){
					$scope.subcats = getData;
					//$scope.loading = false;
					$('.subcats').fadeIn();
				})
				.error(function(data){
					console.log(data);
				});
		};


/**
*FOLLOWS
**/
		/**
		* récupère les followers
		* @return old data
		**/
		$scope.getFollows = function(id) {
			Product.getFollows(id)
				.success(function(data){
					$scope.follows = data;
				});
		};

		/**
		* Follow un thread
		**/
		$scope.addFollow = function() {
			var uri = window.location.href.split("/");
			var value = uri[6];
			Product.follow($scope.followData)
				.success(function(data){
					Product.getFollows(value)
						.success(function(data){
							$scope.follows = data;
						});
				})
				.error(function(data) {
					console.log(data);
				});
		};



/*
* ADMIN
*/

		$scope.editByProductId = function(id){
			 document.location.href="http://www.lateliermac.com/products/"+id+"/edit";
		};

		$scope.showByProductId = function(id){
			 document.location.href="http://www.lateliermac.com/lateliermac/products/"+id;
		};
		$scope.deleteByProductId = function(id){
			 document.location.href="http://www.lateliermac.com/lateliermac/products/"+id;
		};


		/*
		* CATEGORIES
		*/

		/**
		* Création d'une categorie
		* @return data
		**/
		$scope.submitProduct = function() {
			Product.saveProduct($scope.productData)
				.success(function(data) {
					console.log('reussite');
					$('#formpost').slideToggle();
					$('.alert-success').text('Votre produit est!');
					$('.alert-success').slideToggle();
					setTimeout("$('.alert-success').slideToggle(500);",4000 );
					// if successful, we'll need to refresh the comment list
					Product.getCategories()
					 	.success(function(getData) {
					 		$scope.categories = getData;
						});
					})
					.error(function(data) {
						console.log(data);
					});
		};



		/*
		* CATEGORIES
		*/

		/**
		* Création d'une categorie
		* @return data
		**/
		$scope.submitSubCat = function() {
			Product.saveSubCat($scope.subData)
				.success(function(data) {
					console.log('reussite');
					$('#formsub').slideToggle();
					$('.alert-success').text('Votre sous-catégorie a été créée !');
					$('.alert-success').slideToggle();
					setTimeout("$('.alert-success').slideToggle(500);",4000 );
					// if successful, we'll need to refresh the comment list
					Product.getsubcat()
					 	.success(function(data) {
					 		$scope.subcats = data;
						});
					})
					.error(function(data) {
						console.log(data);
					});
		};


		/**
		* Delete thread
		* @return old data
		**/
		$scope.deleteCat = function(id) {
			Product.destroyCat(id)
				.success(function(data) {
					$('.alert-success').text('La catégorie a bien été supprimé !');
					$('.alert-success').slideToggle();
					setTimeout("$('.alert-success').slideToggle(500);",4000 );
					Product.getCategories()
						.success(function(getData) {
							$scope.categories = getData;
						});

				});
		};

	/*
	* SOUS CATEGORIES
	*/
		/**
		* Delete subProduct
		* @return old data
		**/
		$scope.deleteSubcat = function(id) {
			Product.destroySub(id)
				.success(function(data) {
					$('.alert-success').text('La sous-catégorie a bien été supprimé !');
					$('.alert-success').slideToggle();
					setTimeout("$('.alert-success').slideToggle(500);",4000 );
					Product.getsubcat()
						.success(function(getData) {
							$scope.subcats = getData;
						});

				});
		};


	});