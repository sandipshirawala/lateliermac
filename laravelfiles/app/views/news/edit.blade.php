@extends('layouts.admin')

@section('content')
<style>
    .logform{width: 50%;margin-left: 24%;min-height: 500px;}
</style>
<div class="well logform">
{{ Form::open(array('route'=> ['news.update', $new->id], 'method'=>'PUT', 'files' => true , 'enctype'=>'multipart/form-data')) }}
    <div class="form-group">
        <label for="namep">Titre</label>
        <input type="text" id="namep" class="form-control" name="name" placeholder="{{ $new->name }}">
    </div>
    <div class="form-group">
        <label for="textadesc">Description</label>
        <textarea class="form-control" id="textadesc" name="content" cols="30" rows="5" placeholder="{{ $new->content }}"></textarea>
    </div>
    <div class="form-group">
        <label for="namep">Fichier</label>
         {{ Form::file('files', array('class'=>'input-block-level')) }}
    </div>
    <div class="row">

    </div>
    <div class="form-group text-left subads">
        <button type="submit" class="subbtn btn btn-primary">Ajouter</button>
    </div>
{{ Form::close() }}
</div>
@stop
