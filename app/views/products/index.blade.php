@extends('layouts.master')

@section('content')
<div class="all" style="display:flex;">
    <div class="categoriesmenu">
        <div class="list-group">
            <a href="#" class="list-group-item" ng-click="getProductsByCat(1)">
                <i class="flaticon-imac"></i> Ordinateurs
            </a>
            <a href="#" class="list-group-item" ng-click="getProductsByCat(2)">
                <i class="flaticon-computer71"></i> Tablettes
            </a>
            <a href="#" class="list-group-item">
                <i class="flaticon-settings48"></i> Pièces détachées
            </a>
            <a href="#" class="list-group-item">
                <i class="flaticon-suitcase17"></i> Accessoires
            </a>
        </div>
    </div>
    <div class="container prodindex">
    @foreach($products as $v)
        <!-- Begin of rows -->
        <div class="row carousel-row">
            <div class="col-xs-8 col-xs-offset-2 slide-row">
                <div class="carousel slide slide-carousel" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    @if(isset($v->photo1) && !empty($v->photo1))
                    <div class="item active">
                        <img src="{{ URL::to('uploads/'.$v->id.'/'.$v->photo1) }}" alt="Image">
                    </div>
                        @endif
                    @if(isset($v->photo2) && !empty($v->photo2))
                    <div class="item">
                      <img src="{{ URL::to('uploads/'.$v->id.'/'.$v->photo2) }}" alt="Image">
                    </div>
                      @endif
                    @if(isset($v->photo3) && !empty($v->photo3))
                    <div class="item">
                       <img src="{{ URL::to('uploads/'.$v->id.'/'.$v->photo3) }}" alt="Image">
                    </div>
                    @endif
                  </div>
                </div>
                <div class="slide-content">
                    <h4>{{ $v->name }}</h4>
                    <p>{{ $v->description }}</p>
                </div>
                <div class="slide-footer">
                    <span class="pull-right buttons">
                        <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show</button>
                        <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-shopping-cart"></i> Buy</button>
                    </span>
                </div>
            </div>
        </div>
        @endforeach
       <div class="pagination linkpag">
           {{ $products->links() }}
       </div>
    </div>
</div>
@stop