angular.module('mainCtrl', [])

.controller('mainController', function($scope, $http, Product) {

	// Declare mes variables
	$scope.commentData = {};
	$scope.updateData = {};
	$scope.followData = {};
	$scope.subData = {};
	$scope.loading = true;
	$scope.email = '';

	var uri = window.location.href.split("/");
	var value = uri[6];
	var productId, product;
	//RegExp. all numbers digits (0 a 9 et +)
	var threadid = /\d/g;
	// Récupère les différentes catégories et les affiche
	if(window.location.pathname == '/products'){
		Product.getproducts(1)
		.success(function(data){
			$('.prodindex').fadeIn();
			$scope.products = data;
			$scope.loading = false;
		});
	}else if(window.location.pathname == '/admin/products'){
		Product.getadmproducts(1)
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
		if(window.location.pathname == '/admin/products'){
			Product.getadmproducts(id)
			.success(function(getData){
				$scope.products = getData;
				$('.prodindex').fadeIn();
				$('.carousel').carousel();
				$('.tab1').fadeIn();
			})
			.error(function(data){
				console.log(data);
			});
		}else{
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
		}
	};


/*
* ADMIN
*/

	$scope.editByProductId = function(id){
			document.location.href="http://www.lateliermac.com/products/"+id+"/edit";
	};

	$scope.editNew = function(id){
			document.location.href="http://www.lateliermac.com/news/"+id+"/edit";
	};

	$scope.deleteNew = function(id){
			document.location.href="http://www.lateliermac.com/admin/news/delete/"+id;
	};

	$scope.showNew = function(id){
			document.location.href="http://www.lateliermac.com/news/"+id;
	};

	$scope.showByProductId = function(id){
			document.location.href="http://www.lateliermac.com/products/"+id;
	};

	$scope.deleteByProductId = function(id){
			document.location.href="http://www.lateliermac.com/admin/delete/"+id;
	};

	/**
	 *  Open notification modal and set $scope.productId
	 */
	$scope.notifForm = function(productId){
			$scope.productId = productId;
	};

	$scope.notifyMe = function(){
		Product.subscribe($scope.productId, $scope.email)
			.success(function(data) {
				if(!data.email){
					console.log(data);
					$scope.notif =
					$scope.productId = '';
					$('#notifModal').modal('hide');
					// $('.jsError').text('Vous êtes déjà abonné à cette catégorie de prduits');
					// $('.jsError').slideToggle();
					// setTimeout("$('.jsError').slideToggle(500);",4000 );
					toastr.error('Vous êtes déjà abonné à cette catégorie de produits')
				}else{
					$scope.productId = '';
					$('#notifModal').modal('hide');
					// $('.jsSuccess').text("Vous serez prévenu lorsqu'un produit semblable sera disponible !");
					// $('.jsSuccess').slideToggle();
					// setTimeout("$('.jsSuccess').slideToggle(500);",4000 );
					toastr.success('Vous serez prévenu lorsqu\'un produit semblable sera disponible !');
				}
			})
			.error(function(data) {
				console.log(data);
			});
	};

	$('#notifModal input').keydown(function(event){
			if(event.keyCode == 13){
					$scope.notifyMe();
			}
	});

	/**
	* Création d'une categorie
	* @return data
	**/
	$scope.submitProduct = function() {
		Product.saveProduct($scope.productData)
		.success(function(data) {
			console.log('reussite');
			$('#formpost').slideToggle();
			$('.alert-success').text('Votre produit est en ligne !');
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

});
