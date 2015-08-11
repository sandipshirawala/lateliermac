@extends('layouts.master')

@section('content')
<div class="all" style="margin-top:1% !important;">
    <div class="categoriesmenu">
        <div class="list-group">
            <span class="list-group-item" ng-click="getProductsByCat(1)">
                <i class="flaticon-imac"></i> Macs
            </span>
            <span href="#" class="list-group-item" ng-click="getProductsByCat(2)">
                <i class="flaticon-computer71"></i> iPads
            </span>
            <span href="#" class="list-group-item" ng-click="getProductsByCat(3)">
                <i class="flaticon-settings48"></i> Pièces détachées
            </span>
            <span href="#" class="list-group-item" ng-click="getProductsByCat(4)">
                <i class="flaticon-suitcase17"></i> Accessoires
            </span>
        </div>
    </div>
    <div class="container prodindex">
        <!-- Begin of rows -->
        <div class="row carousel-row" ng-repeat="product in products">
            <div class="col-xs-8 col-xs-offset-2 slide-row">
                <div class="carousel slide slide-carousel" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                        <a href="{{ URL::to('uploads/<%product.id%>/<%product.photo1%>') }}" class="fancybox" rel="<% product.id %>">
                            <img ng-src="{{ URL::to('uploads/<%product.id%>/<%product.photo1%>') }}" alt="Image">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ URL::to('uploads/<%product.id%>/<%product.photo2%>') }}" class="fancybox"  rel="<% product.id %>">
                            <img ng-src="{{ URL::to('uploads/<%product.id%>/<%product.photo2%>') }}" alt="Image">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ URL::to('uploads/<%product.id%>/<%product.photo3%>') }}" class="fancybox"  rel="<% product.id %>">
                            <img ng-src="{{ URL::to('uploads/<%product.id%>/<%product.photo3%>') }}" alt="Image">
                        </a>
                    </div>
                  </div>
                </div>
                <div class="slide-content">
                    <h4>
                      <% product.name %>
                    </h4>
                    <p>
                        <% product.description %>
                    </p>
                </div>
                <div class="slide-footer">
                    <span class="pricelab label label-primary label-lg">
                      <% product.prix %> €
                    </span>
                    &nbsp;
                    <a style="font-size: 13px!important;line-height: 1.3;" href="#" class="btn btn-default btn-sm" ng-if="product.prix == 0" ng-click="notifForm(product.id)" data-toggle="modal" data-target="#notifModal">Me prévenir si ce produit est à nouveau disponible</a>
                    <span class="pull-right buttons">
                        <button ng-click="showByProductId(product.id)" class="btn btn-sm btn-primary more"><i class="fa fa-fw fa-eye"></i> Voir +</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade newprod" id="notifModal" tabindex="-1" role="dialog" aria-labelledby="notifModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="notifModalLabel">Souscrire à ce produit</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input name="email" type="text" ng-model="email" placeholder="Votre adresse email ..."  class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" ng-click="notifyMe()" class="btn btn-primary">Envoyer</button>
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
