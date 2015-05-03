<<<<<<< HEAD
<?php namespace Illuminate\Cookie;

use Illuminate\Support\ServiceProvider;

class CookieServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('cookie', function($app)
		{
			$config = $app['config']['session'];

			return (new CookieJar)->setDefaultPathAndDomain($config['path'], $config['domain']);
		});
	}

}
=======
<?php namespace Illuminate\Cookie;

use Illuminate\Support\ServiceProvider;

class CookieServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('cookie', function($app)
		{
			$config = $app['config']['session'];

			return (new CookieJar)->setDefaultPathAndDomain($config['path'], $config['domain']);
		});
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
