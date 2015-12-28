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
                    @if (!is_null($new->file))
                    <div class="item active">
                        <a href="{{ URL::to('presse/'.$new->id.'/'.$new->file) }}" class="fancybox" rel="<% product.id %>">
                            <img src="{{ URL::to('presse/'.$new->id.'/'.$new->file) }}" alt="Image">
                        </a>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="slide-content">
                    <h4 @if (is_null($new->file)) style="margin-left: -30% !important;" @endif class="text-center">{{ $new->name }}</h4>
                    <p @if (is_null($new->file)) style="margin-left: -30% !important;" @endif>{{ substr($new->content, 0, 200) }} <br>[...]</p>
                </div>
                <div class="slide-footer">
                    <span class="pull-right buttons">
                        <button ng-click="showNew({{ $new->id }})" class="btn btn-sm btn-primary more"><i class="fa fa-fw fa-eye"></i> Voir +</button>
                    </span>
                </div>
            </div>
        </div>
				@endforeach
        <div class="text-center">
          {{ $news->links() }}
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.fancybox').fancybox();
    });
</script>
@stop
