@extends('layouts.admin')

@section('content')
<style>
    .logform{width: 50%;margin-left: 24%;min-height: 500px;}
</style>
<div class="well logform">
{{ Form::open(array('route'=> ['products.update', $produit->id], 'method'=>'PUT', 'files' => true , 'enctype'=>'multipart/form-data')) }}
    <div class="form-group">
        <label for="namep">Nom</label>
        <input type="text" id="namep" class="form-control" name="name" placeholder="{{ $produit->name }}">
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" id="price" class="form-control" name="prix" placeholder="{{ $produit->prix }}">
    </div>
    <div class="form-group">
        <label for="textadesc">Description</label>
        <textarea class="form-control" id="textadesc" name="description" cols="30" rows="5" placeholder="{{ $produit->description }}"></textarea>
    </div>
    <div class="form-group">
        <label for="namep">Photos</label>
         {{ Form::file('files[]', array('class'=>'input-block-level', 'multiple')) }}
    </div>
    <div class="row">

    </div>
    <div class="form-group text-left subads">
        <button type="submit" class="subbtn btn btn-primary">Ajouter</button>
    </div>
{{ Form::close() }}
</div>
@stop