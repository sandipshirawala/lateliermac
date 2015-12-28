<?php

class NewsController extends \BaseController {

		/**
		 * Display a listing of news
		 *
		 * @return Response
		 */
		public function index()
		{
				$news = News::paginate(5);

				return View::make('news.index', compact('news'));
		}

		/**
		 * Show the form for creating a new news
		 *
		 * @return Response
		 */
		public function create()
		{
				return View::make('news.create');
		}

		/**
		 * Store a newly created news in storage.
		 *
		 * @return Response
		 */
		public function store()
		{
		    $add = new News;
	      $add->name = Input::get('name');
	      $add->content = Input::get('content');
	      $files = Input::file('files');

	      if ($files)
				 	$add->file = strtolower($files->getClientOriginalName());

				$add->save();

				if (!empty($add->file)) {
						$path = public_path(strtolower('presse'.DIRECTORY_SEPARATOR.$add->id));
						$filename = strtolower($files->getClientOriginalName());
						$files->move($path, $filename);
				}

				return Redirect::route('news.index')->with('message', 'Votre article de presse est désormais en ligne !');
		}

		/**
		 * Display the specified news.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function show($id)
		{
				$news = News::findOrFail($id);

				return View::make('news.show', compact('news'));
		}

		/**
		 * Show the form for editing the specified news.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function edit($id)
		{
				if (!Auth::check())
						return Redirect::to('/')->with('error', 'Vous n\'avez pas accès à cette partie du site !');
				$new  = News::findOrFail($id);

				return View::make('news.edit', compact('new'));
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function delete($id) {
				if (!Auth::check()) {
						return Redirect::to('/')->with('error', 'Vous n\'êtes pas autorisé à accéder à cette partie du site');
				}
				News::destroy($id);

				return Redirect::to('admin/news')->with('message', 'L\'article a bien été supprimé !');
		}
		/**
		 * Update the specified resource in storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function update($id)
		{
				$news = News::findOrFail($id);

	    	if (!empty(Input::get('name')))
	        	$datas['name'] = Input::get('name');
				if (!empty(Input::get('content')))
	        	$datas['content'] = Input::get('content');
	  		if (!empty(Input::file('files'))) {
						$file = Input::file('files');
		    		$datas['file'] = strtolower($file->getClientOriginalName());
				}

				$news->update($datas);

				if (!empty($file)) {
						$path = public_path(strtolower('presse'.DIRECTORY_SEPARATOR.$news->id));
						$filename = strtolower($file->getClientOriginalName());
						$extension = strtolower($file->getClientOriginalExtension());
						$mime = $file->getMimeType();
						$file->move($path, $filename);
			  }

				return Redirect::to('admin/news')->with('message', 'Article édité avec succès !');
		}
}
