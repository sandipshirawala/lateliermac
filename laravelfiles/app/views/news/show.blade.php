@extends('layouts.master')

@section('content')
<div class="well logform">
    <div class="article-header" style="display:flex;">
        <span class="retourar btn btn-sm btn-default" onclick="javascript:history.back();">Retour</span>
        <h1>{{ $new->name }} </h1>
    </div>
        <hr>
    <div class="contenu">
        {{ $new->description }}
    </div>
    <div>
        <img class="thumbnail actphoto" src="{{ URL::to('uploads/'.$new->id.'/'.$new->file) }}" alt="">
    </div>
    <hr>
    <span class="pricelab showprice label label-primary label-lg">{{ $new->prix }} €</span>
    <p class="tags">Posté le {{ new::show($new->created_at) }} </p>
</div>
<script>
    $(function(){
        $('.fancybox').fancybox();
    });
</script>
@stop
