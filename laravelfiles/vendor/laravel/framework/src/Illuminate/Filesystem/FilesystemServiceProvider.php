<<<<<<< HEAD
<?php namespace Illuminate\Filesystem;

use Illuminate\Support\ServiceProvider;

class FilesystemServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('files', function() { return new Filesystem; });
	}

}
=======
<?php namespace Illuminate\Filesystem;

use Illuminate\Support\ServiceProvider;

class FilesystemServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('files', function() { return new Filesystem; });
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
