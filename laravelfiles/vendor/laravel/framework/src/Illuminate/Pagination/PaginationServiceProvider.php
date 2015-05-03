<<<<<<< HEAD
<?php namespace Illuminate\Pagination;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider {

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
		$this->app->bindShared('paginator', function($app)
		{
			$paginator = new Factory($app['request'], $app['view'], $app['translator']);

			$paginator->setViewName($app['config']['view.pagination']);

			$app->refresh('request', $paginator, 'setRequest');

			return $paginator;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('paginator');
	}

}
=======
<?php namespace Illuminate\Pagination;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider {

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
		$this->app->bindShared('paginator', function($app)
		{
			$paginator = new Factory($app['request'], $app['view'], $app['translator']);

			$paginator->setViewName($app['config']['view.pagination']);

			$app->refresh('request', $paginator, 'setRequest');

			return $paginator;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('paginator');
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
