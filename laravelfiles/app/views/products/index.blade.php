@extends('layouts.master')

@section('content')
<base href="/products/" />
<div class="all" style="margin-top:1% !important;">
    <div class="categoriesmenu">
        <div class="form-group searchInput">
            <input type="text" name="name" class="form-control" placeholder="Recherche ..." autocomplete="off" ng-model="query.name">
        </div>
        <div class="list-group" id="productsMenu">
            <span class="list-group-item" ui-sref="category({ category: 'ordinateurs' })">
                <i class="flaticon-imac"></i> Macs
            </span>
            <span href="#" class="list-group-item" ui-sref="category({ category: 'tablettes' })">
                <i class="flaticon-computer71"></i> iPads
            </span>
            <span href="#" class="list-group-item" ui-sref="category({ category: 'pieces' })">
                <i class="flaticon-settings48"></i> Pièces détachées
            </span>
            <span href="#" class="list-group-item" ui-sref="category({ category: 'accessoires' })">
                <i class="flaticon-suitcase17"></i> Accessoires
            </span>
        </div>
    </div>
    <div ui-view id="uiView"></div>
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
          <input id="subscriber" name="email" type="text" ng-model="email" placeholder="Votre adresse email ..."  class="form-control">
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
        $('#notifModal').on('shown.bs.modal', function () {
            $('#subscriber').focus();
        });
    });
</script>
@stop
