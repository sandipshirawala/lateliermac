@extends('layouts.master')

@section('content')
<div class="well logform">
    <div class="article-header" style="display:flex;">
<<<<<<< HEAD
        <span class="retourar btn btn-sm btn-default" onclick="javascript:history.back();">Retour</span>
        <h1>{{ $product->name }} </h1>
    </div>
        <hr>
    <div class="photos">
        <a href="{{ URL::to('uploads/'.$product->id.'/'.$product->photo1) }}" class="fancybox" rel="gallery">
            <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo1) }}" alt="img">
        </a>
        <a href="{{ URL::to('uploads/'.$product->id.'/'.$product->photo2) }}" class="fancybox" rel="gallery">
            @if(!empty($product->photo2) && !is_null($product->photo2))
                <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo2) }}" alt="img">
            @endif
        </a>
        <a href="{{ URL::to('uploads/'.$product->id.'/'.$product->photo3) }}" class="fancybox" rel="gallery">
            @if(!empty($product->photo3) && !is_null($product->photo3))
                <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo3) }}" alt="img">
            @endif
        </a>
=======
        <h1>{{ $product->name }} </h1><span class="retourar btn btn-sm btn-default" onclick="javascript:history.back();">Retour</span>
    </div>
        <hr>
    <div class="photos">
        <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo1) }}" alt="">
        @if(!empty($product->photo2) && !is_null($product->photo2))
            <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo2) }}" alt="">
        @endif
        @if(!empty($product->photo3) && !is_null($product->photo3))
            <img class="thumbnail" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo3) }}" alt="">
        @endif
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
    </div>
    <div class="contenu">
        {{ $product->description }}
    </div>
    <div>
        <img class="thumbnail actphoto" src="{{ URL::to('uploads/'.$product->id.'/'.$product->photo1) }}" alt="">
    </div>
    <hr>
<<<<<<< HEAD
    <span class="pricelab showprice label label-primary label-lg">{{ $product->prix }} €</span>
    <p class="tags">Posté le {{ Product::show($product->created_at) }} </p>
</div>
<script>
    $(function(){
        $('.fancybox').fancybox();
    });
</script>
@stop
=======
    <p class="tags">Posté le {{ Product::show($product->created_at) }} </p>
</div>
@stop
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
