@extends('layouts.unlogged')

@section('content')
<div class="row headlog">
	<h1 class="titlemac">l'aTelier mAc <span id="logomac">@&@</span></h1> <br>
        <p class="adress">
            26 Place des Clercs,<br>
            26200 MONTÉLIMAR
        </p>
        <nav>
        	<a href="{{ URL::to('/') }}">RETOUR &nbsp;<i class="fa fa-home fa-2x"></i></a>
        </nav>
</div>
<div class="imac">
	<div class="col-md-12">
	    <div class="modal-dialog" style="margin-bottom:0">
	        <div class="modal-content">
	            <div class="panel-body">
	                {{ Form::open(array('url'=>'postlogin', 'method' => 'post')) }}
	                    <fieldset>
	                        <div class="form-group">
	                        	{{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Username')) }}
	                        </div>
	                        <div class="form-group">
	                        	{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
	                        </div>
	                        <div class="text-center sublog">
	                        	<button type="submit" class="btn btn-primary logedin">Accés Admin &nbsp;<i class="fa fa-lock"></i></button>
		   						{{ Form::close() }}
	                   		</div>
	                    </fieldset>
	            </div>
	        </div>
	    </div>
	</div>
</div>
        <footer>
              <p class="text-center"><strong>SAS/U Djecha / RCS Romans - 803980515 - l'aTelier mAc &copy; - 26 Place des Clercs 26200 MONTÉLIMAR </strong></p>
        </footer>
@stop
