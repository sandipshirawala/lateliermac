@extends('layouts.master')

@section('content')
<div class="well logform newblock">
    <div class="article-header" style="display:flex;">
        <span class="retourar btn btn-sm btn-default" onclick="javascript:history.back();">Retour</span>
        <h1>{{ $news->name }} </h1>
    </div>
        <hr>
    <div>
        <p class="newscontent">{{ $news->content }}</p>
        @if(!is_null($news->file))
          <img class=" newphoto" src="{{ URL::to('presse/'.$news->id.'/'.$news->file) }}" alt="">
        @endif
    </div>
    <hr>
    <span class="pricelab showprice label label-primary label-lg"></span>
    <p class="tags">Posté le {{ Product::show($news->created_at) }} </p>
</div>
<script>
    $(function(){
        $('.fancybox').fancybox();
    });
</script>
@stop
