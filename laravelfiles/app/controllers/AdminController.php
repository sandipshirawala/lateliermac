<?php

class AdminController extends \BaseController {

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		public function index()
		{
				return View::make('admin.index');
		}

		public function getProducts()
		{
				$product = Product::paginate(5);

				return View::make('admin.products')->with('product', $product);
		}

		/**
		 * Get news.
		 * @return Response
		 */
		public function getNews()
		{
				$news = News::paginate(5);

				return View::make('admin.news')->with('news', $news);
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 *
		 * @return Response
		 */
		public function contact()
		{
				$validator = Validator::make(Input::all(), Contact::$rules);
				if (!$validator->passes()){
						return Redirect::to('/')->with('error', 'Veuillez ouvrir le formulaire et corriger vos erreurs');
				}

				$contact = new Contact;
				$contact->author = Input::get('author');
				$contact->email = Input::get('email');
				$contact->service	= Input::get('service');
				$contact->contenu = Input::get('message');
				$contact->save();

				Mail::send('emails.contact', $contact->toArray(), function($message) use($contact) {
            $message->from('contact@lateliermac.com', 'Client');
            $message->to('contact@lateliermac.com', 'Contact client')
						->subject('L\'Atelier Mac - Service '.$contact->service);
        });

		    return Redirect::to('/')->with('message', 'Votre message a bien été envoyé');
		}


		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 *
		 * @return Response
		 */
		public function contactProduct()
		{
				$validator = Validator::make(Input::all(), Product::$rules);
				if ($validator->passes()){
						return Redirect::to('/')->with('error', 'Veuillez ouvrir le formulaire et corriger vos erreurs');
				}
				$contact = new Contact;
				$contact->author    = Input::get('author');
				$contact->email    		= Input::get('email');
				$contact->service				= Input::get('service');
				$contact->contenu   = Input::get('message');
				$contact->save();
				Mail::send('emails.contact', $contact->toArray(), function($message) use($contact) {
            $message->from('contact@lateliermac.com', 'Client');
            $message->to('contact@lateliermac.com', 'Contact client')
        		->subject('Service '.$contact->service);
				});

				return Redirect::to('/')->with('message', 'Votre message a bien été envoyé');
		}
}
