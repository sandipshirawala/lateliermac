<<<<<<< HEAD
<?php namespace Illuminate\Redis;

use Illuminate\Support\ServiceProvider;

class RedisServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('redis', function($app)
		{
			return new Database($app['config']['database.redis']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('redis');
	}

}
=======
<?php namespace Illuminate\Redis;

use Illuminate\Support\ServiceProvider;

class RedisServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('redis', function($app)
		{
			return new Database($app['config']['database.redis']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('redis');
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
