@extends('layouts.master')

@section('content')
<div class="well logform">
    <div class="article-header">
        <h1>{{ $product->name }} </h1>
        <hr>
    </div>
    <div class="photos">
        <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo1) }}" alt="">
        @if(!empty($product->photo2) && !is_null($product->photo2))
            <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo2) }}" alt="">
        @endif
        @if(!empty($product->photo3) && !is_null($product->photo3))
            <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo3) }}" alt="">
        @endif
    </div>
    <div class="contenu">
        {{ $product->description }}
    </div>
    <div>
        <img class="thumbnail actphoto" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo1) }}" alt="">
    </div>
    <hr>
    <p class="tags">Posté le {{ Product::show($product->created_at) }} </p>
</div>
@stop