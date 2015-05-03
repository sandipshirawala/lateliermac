<<<<<<< HEAD
<?php namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Database\Schema\Builder
 */
class Schema extends Facade {

	/**
	 * Get a schema builder instance for a connection.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Database\Schema\Builder
	 */
	public static function connection($name)
	{
		return static::$app['db']->connection($name)->getSchemaBuilder();
	}

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$app['db']->connection()->getSchemaBuilder();
	}

}
=======
<?php namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Database\Schema\Builder
 */
class Schema extends Facade {

	/**
	 * Get a schema builder instance for a connection.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Database\Schema\Builder
	 */
	public static function connection($name)
	{
		return static::$app['db']->connection($name)->getSchemaBuilder();
	}

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$app['db']->connection()->getSchemaBuilder();
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
