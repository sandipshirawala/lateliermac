<<<<<<< HEAD
﻿<?php
=======
<?php
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::paginate(3);
		return View::make('products.index')->with('products', $products);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		if(Auth::check()){
			$validator = Validator::make(Input::all(), Product::$rules);
			if($validator->passes()){
			    $add = new Product;
	            $add->name = Input::get('name');
	            $add->description = Input::get('description');
	            $add->prix = Input::get('prix');
	            $add->category_id = Input::get('category');
	            $files = Input::file('files');

	            if(isset($files[0]) && !empty($files[0]))
	            	$add->photo1 = strtolower($files[0]->getClientOriginalName());
	            if(isset($files[1]) && !empty($files[1]))
	            	$add->photo2 = strtolower($files[1]->getClientOriginalName());
	            if(isset($files[2]) && !empty($files[2]))
	            	$add->photo3 = strtolower($files[2]->getClientOriginalName());

				$add->save();

				if(!empty($add->photo1)){
					foreach ($files as $file) {
						$path = public_path(strtolower('uploads'.DIRECTORY_SEPARATOR.$add->id));
						$filename = strtolower($file->getClientOriginalName());
						$file->move($path, $filename);
<<<<<<< HEAD
						Product::resize(public_path(strtolower('uploads'.DIRECTORY_SEPARATOR.$add->id.DIRECTORY_SEPARATOR.$filename)));
					}
				}
			    return Redirect::to('admin/products')->with('message', 'Votre annonce est désormais en ligne !');
		    }else{
		    	return Redirect::to('admin/products')
=======
				    }
				}
			    return Redirect::to('admin/products')->with('message', 'Votre annonce est désormais en ligne !');
		    }else{
		    	return Redirect::to('admin/products')->with('error', 'Vous n\'avez pas accès à cette partie du site')
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
		    	->with('error', 'Veuillez corrigez vos erreurs !')
				->withErrors($validator)
				->withInput();
			}
		}else{
		    return Redirect::to('/')->with('error', 'Vous n\'avez pas accès à cette partie du site');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id){
		$product = Product::findOrFail($id);
		return View::make('products.show')->with('product', $product);
	}

	/**
	 * Display products by category
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getProductsByCategory($id){
<<<<<<< HEAD
		return Response::json(Product::where('category_id','=',$id)->orderBy('sort_order', 'asc')->get());
=======
		return Response::json(Product::where('category_id','=',$id)->get());
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id){
		$produit  = Product::findOrFail($id);
    	if(!Auth::check())
        	return Redirect::to('/')->with('error', 'Vous n\'avez pas accès à cette partie du site !');
        return View::make('products.edit')->with('produit', $produit);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id){
		$product = Product::findOrFail($id);
<<<<<<< HEAD
=======
        if(!Auth::check())
        	return Redirect::to('/')->with('message', 'Vous n\'avez pas accès à cette partie du site');

>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
        if(!empty(Input::get('name')))
        	$datas['name'] = Input::get('name');
		if(!empty(Input::get('prix')))
        	$datas['prix'] = Input::get('prix');
  		if(!empty(Input::get('description')))
        	$datas['description'] = Input::get('description');

		$files = Input::file('files');
        if(isset($files[0]) && !empty($files[0]) && is_null($product->photo1)){
        	$datas['photo1'] = strtolower($files[0]->getClientOriginalName());
        }elseif(isset($files[0]) && !empty($files[0]) && !is_null($product->photo1)){
        	$datas['photo2'] = strtolower($files[0]->getClientOriginalName());
        }
        if(isset($files[1]) && !empty($files[1]) && is_null($product->photo2)){
        	$datas['photo2'] = strtolower($files[1]->getClientOriginalName());
    	}elseif(isset($files[1]) && !empty($files[1]) && !is_null($product->photo2)){
        	$datas['photo3'] = strtolower($files[1]->getClientOriginalName());
        }
        if(isset($files[2]) && !empty($files[2]) && is_null($product->photo3)){
        	$datas['photo3'] = strtolower($files[2]->getClientOriginalName());
        }elseif(isset($files[2]) && !empty($files[2]) && !is_null($product->photo2)){
        	$datas['photo3'] = strtolower($files[2]->getClientOriginalName());
        }
		$product->update($datas);

		if(!empty($datas['photo1']) || !empty($datas['photo2']) || !empty($datas['photo3'])){
	        foreach ($files as $file) {
				$path = public_path(strtolower('uploads'.DIRECTORY_SEPARATOR.$product->id));
				$filename = strtolower($file->getClientOriginalName());
				$extension = strtolower($file->getClientOriginalExtension());
				$mime = $file->getMimeType();
				$file->move($path, $filename);
<<<<<<< HEAD
				Product::resize(public_path(strtolower('uploads'.DIRECTORY_SEPARATOR.$product->id.DIRECTORY_SEPARATOR.$filename)));
=======
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
		    }
		}
        return Redirect::to('admin/products')->with('message', 'Votre annonce a bien été édité !');
	}

<<<<<<< HEAD
	public function sort()
	{
		$input = \Input::get('order');
		$i = 1;
		foreach($input as $value) {
			$product = Product::findOrFail($value);
			$data['sort_order'] = $i;
			$product->update($data);
			$i++;
		}
	}
=======
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id){
		if(Auth::check()){
			Product::destroy($id);
			return Redirect::to('admin/products')->with('message', 'Le produit a bien été supprimé !');
		}else{
			return Redirect::to('/')->with('error', 'Vous n\'êtes pas autorisé à accéder à cette partie du site');
		}
	}


}
