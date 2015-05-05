@extends('layouts.admin')
@section('content')

	<div class="macbk">
	</div>
	<div class="panel panel-default productlist">
        <hr />
        <div class="drop102">
            <span class="last10">
          	  	GESTION DE LA PRESSE &nbsp;
            	<i class="crudadm fa fa-shopping-cart"></i>
	            <span data-toggle="modal" class="voir btn btn-default btn-sm btn-lg" data-target="#myModal"><i class="fa fa-plus fa-2x"></i></span>
            	<br>
            </span>
            <hr />
        </div>
        <div class="tab1">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="sortable" ui-sortable="sortableOptions" ng-model="products">
                    <tr id="<% product.id %>" class="tr" ng-repeat="product in products">
                        <td>id</td>
                        <td>name</td>
                        <td class="actions">
                            <span class="crudadm fa fa-pencil" ng-click="editNew(product.id)"></span> &nbsp;
                            <span class="crudadm fa fa-remove" ng-click="deleteNew(product.id)"></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
	<div class="modal fade newprod" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Nouvelle presse</h4>
				</div>
				<div class="modal-body">
					<div>
						{{ Form::open(array('url' => 'admin/news' , 'enctype'=>'multipart/form-data')) }}
							<div class="form-group">
								<label for="namep">Titre</label>
								<input type="text" id="namep" class="form-control" name="name" placeholder="iMac, Macbook..">
							</div>
							<div class="form-group">
								<label for="textadesc">Description <span class="text-muted">(optionnel)</span></label>
								<textarea class="form-control" id="textadesc" name="description" cols="30" rows="5" placeholder="etat, configuration.."></textarea>
							</div>
							<div class="form-group">
								<label for="namep">Fichier<span class="text-muted">(optionnel)</span></label>
								 {{ Form::file('files[]', array('class'=>'input-block-level', 'multiple')) }}
							</div>
							<div class="form-group text-left subads">
								<button type="submit" class="subbtn btn btn-primary">Ajouter</button>
							</div>
						{{ Form::close() }}
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function () {
		$('#sortable').sortable({
			cursor: 'move',
			axis: 'y',
			update: function (event, ui) {
				var order = $(this).sortable('toArray');
				$.ajax({
					data : {order : order},
					type: 'POST',
					url: 'http://www.lateliermac.com/reorder'
				});
			}
		});
	});
	</script>
@stop
