@extends('layouts.master')

@section('content')
<div class="all" style="margin-top:1% !important;">
    <div class="categoriesmenu">
        <div class="list-group">
            <span class="list-group-item" ng-click="getProductsByCat(1)">
                <i class="flaticon-imac"></i> Ordinateurs
            </span>
            <span href="#" class="list-group-item" ng-click="getProductsByCat(2)">
                <i class="flaticon-computer71"></i> Tablettes
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
                        <img src="{{ URL::to('uploads/<%product.id%>/<%product.photo1%>') }}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{ URL::to('uploads/<%product.id%>/<%product.photo2%>') }}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{ URL::to('uploads/<%product.id%>/<%product.photo3%>') }}" alt="Image">
                    </div>
                  </div>
                </div>
                <div class="slide-content">
                    <h4><% product.name %></h4>
                    <p><% product.description %></p>
                </div>
                <div class="slide-footer">
                    <span class="pull-right buttons">
                        <button ng-click="showByProductId(product.id)" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-eye"></i> Voir +</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@stop