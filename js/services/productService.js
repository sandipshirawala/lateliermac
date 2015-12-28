angular.module('productService', [])

	.factory('Product', function($http) {
		return {
			getproducts : function(id){
				return $http.get('/getproducts/' + id, { cache: true });
			},
			getadmproducts : function(id){
				return $http.get('/admin/getproducts/' + id);
			},
			subscribe : function(productId, userEmail) {
				var data = {email: userEmail};
				value = $.param(data);
				return $http({
					method: 'POST',
					url: '/subscribe/'+ productId,
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: value
				});
			}
		}

	});
