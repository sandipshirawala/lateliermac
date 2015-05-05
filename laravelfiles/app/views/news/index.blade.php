@extends('layouts.master')

@section('content')
<div class="all" style="margin-top:1% !important;">
    <div class="container prodindex">
				@foreach($news as $new)
        <div class="row carousel-row">
            <div class="col-xs-8 col-xs-offset-2 slide-row">
                <div class="carousel slide slide-carousel" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                        <a href="{{ URL::to('presse/'.$new->id.'/'.$new->file) }}" class="fancybox" rel="<% product.id %>">
                            <img src="{{ URL::to('presse/'.$new->id.'/'.$new->file) }}" alt="Image">
                        </a>
                    </div>
                  </div>
                </div>
                <div class="slide-content">
                    <h4>{{ $new->name }}</h4>
                    <p>{{ substr($new->content, 0, 100) }}</p>
                </div>
                <div class="slide-footer">
                    <span class="pricelab label label-primary label-lg"><% product.prix %> €</span>
                    <span class="pull-right buttons">
                        <button ng-click="showNew({{ $new->name }})" class="btn btn-sm btn-primary more"><i class="fa fa-fw fa-eye"></i> Voir +</button>
                    </span>
                </div>
            </div>
        </div>
				@endforeach
    </div>
</div>
<script>
    $(function(){
        $('.fancybox').fancybox();
    });
</script>
@stop
