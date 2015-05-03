<<<<<<< HEAD
<?php namespace Illuminate\Routing\Matching;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SchemeValidator implements ValidatorInterface {

	/**
	 * Validate a given rule against a route and request.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  \Illuminate\Http\Request  $request
	 * @return bool
	 */
	public function matches(Route $route, Request $request)
	{
		if ($route->httpOnly())
		{
			return ! $request->secure();
		}
		elseif ($route->secure())
		{
			return $request->secure();
		}

		return true;
	}

}
=======
<?php namespace Illuminate\Routing\Matching;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SchemeValidator implements ValidatorInterface {

	/**
	 * Validate a given rule against a route and request.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  \Illuminate\Http\Request  $request
	 * @return bool
	 */
	public function matches(Route $route, Request $request)
	{
		if ($route->httpOnly())
		{
			return ! $request->secure();
		}
		elseif ($route->secure())
		{
			return $request->secure();
		}

		return true;
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
