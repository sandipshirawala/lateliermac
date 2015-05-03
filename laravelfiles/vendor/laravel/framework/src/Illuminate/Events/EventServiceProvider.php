<<<<<<< HEAD
<?php namespace Illuminate\Events;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['events'] = $this->app->share(function($app)
		{
			return new Dispatcher($app);
		});
	}

}
=======
<?php namespace Illuminate\Events;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['events'] = $this->app->share(function($app)
		{
			return new Dispatcher($app);
		});
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
