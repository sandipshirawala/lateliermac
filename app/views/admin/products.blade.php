@extends('layouts.admin')
@section('content')
<style>
	.macbk{margin-left: 420px;height: 798px;background: url(../img/maco.png) 0 0 no-repeat;}.productlist{width: 823px;height: 477px;margin-top: -734px;margin-left: 601px;padding-left: 0%;}.last10{margin-left: 38%;margin-right: 22%;}.linkpag{position:absolute;margin:20%;}.navbtn {padding-left: 10px !important;}.sidebar-nav li a{padding-left:27px;}
</style>
	<div class="macbk">
	</div>
	<div class="panel panel-default productlist">
        <hr />
        <div class="drop102">
            <span class="last10">
            GESTION DES PRODUITS &nbsp;
            	<i class="crudadm fa fa-folder-open"></i>
            </span>
            <span id="newsub" data-toggle="modal" class="voir btn btn-default btn-sm" data-target="#myModal">Nouveau produit</span>
            <hr />
        </div>
        <div class="tab1">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($product as $v)
                    <tr class="tr">
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->prix }}</td>
                        <td>{{ $v->name }}</td>
                        <td>
                            <span class="crudadm fa fa-pencil"></span> &nbsp;
                            <a class="crudadm fa fa-remove" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?);" href="{{URL::to('admin/delete/'.$v->id)}}"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
	<div class="modal fade newprod" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Nouveau produit</h4>
				</div>
				<div class="modal-body">
					<div>
						{{ Form::open(array('url' => 'admin/products' , 'enctype'=>'multipart/form-data')) }}
							<div class="form-group">
								<label for="namep">Nom</label>
								<input type="text" id="namep" class="form-control" name="name" placeholder="iMac, Macbook..">
							</div>
							<div class="form-group">
								<label for="price">Prix</label>
								<input type="text" id="price" class="form-control" name="prix" placeholder="ex: 550">
							</div>
							<div class="form-group">
								<label for="textadesc">Description</label>
								<textarea class="form-control" id="textadesc" name="description" cols="30" rows="5" placeholder="etat, configuration.."></textarea>
							</div>
							<div class="form-group">
								<label for="namep">Photos</label>
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
	<div class="pagination linkpag">
        <?php echo $product->links(); ?>
    </div>
@stop