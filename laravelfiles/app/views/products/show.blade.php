@extends('layouts.master')

@section('content')
<div class="container-fluid" >
  <div class="content-wrapper">
		<div class="item-container">
			<div class="container">
        <a class="retourar btn btn-sm btn-default" ng-href="/products/<% getCategoryName({{ $product->category_id}}) %>">Retour</a>
				<div class="col-md-12" style="float:left;">
					<div class="product col-md-4 service-image-left">
						<div>
              <a href="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo1}}" class="fancybox">
		             <img id="item-display" src="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo1}}" alt=""></img>
              </a>
						</div>
					</div>

					<div class="container service1-items col-sm-2 col-md-2 pull-left">
						<div>
              <a href="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo1}}" class="service1-item fancybox" id="item-1" rel="gallery">
                  <img src="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo1}}" alt="img">
              </a>
              <a id="item-2" href="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo2}}" class="fancybox service2-item" rel="gallery">
                  @if (!empty($product->photo2) && !is_null($product->photo2))
                      <img src="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo2}}" alt="img">
                  @endif
              </a>
              <a id="item-3" href="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo3}}" class="service3-item fancybox" rel="gallery">
                  @if (!empty($product->photo3) && !is_null($product->photo3))
                      <img src="http://lateliermac.com/uploads/{{$product->id}}/{{$product->photo3}}" alt="img">
                  @endif
              </a>
						</div>
					</div>
				</div>

				<div class="col-md-6 productOnly" >
					<div class="product-title">{{$product->name}}</div>
					<div class="product-desc">{{ $product->description }}</div>
					<hr>
					<div class="product-price">{{ $product->prix }}€</div>
					<div class="product-stock">{{ $product->prix > 0 ? "En stock" : "Épuisé"}}</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    $(function(){
        $('.fancybox').fancybox();
    });
</script>
@stop
