<<<<<<< HEAD
<?php namespace Illuminate\Encryption;

use Illuminate\Support\ServiceProvider;

class EncryptionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('encrypter', function($app)
		{
			$encrypter =  new Encrypter($app['config']['app.key']);

			if ($app['config']->has('app.cipher'))
			{
				$encrypter->setCipher($app['config']['app.cipher']);
			}

			return $encrypter;
		});
	}

}
=======
<?php namespace Illuminate\Encryption;

use Illuminate\Support\ServiceProvider;

class EncryptionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('encrypter', function($app)
		{
			$encrypter =  new Encrypter($app['config']['app.key']);

			if ($app['config']->has('app.cipher'))
			{
				$encrypter->setCipher($app['config']['app.cipher']);
			}

			return $encrypter;
		});
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
