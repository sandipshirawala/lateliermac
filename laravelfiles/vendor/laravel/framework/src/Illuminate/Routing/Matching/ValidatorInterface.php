<<<<<<< HEAD
<?php namespace Illuminate\Routing\Matching;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

interface ValidatorInterface {

	/**
	 * Validate a given rule against a route and request.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  \Illuminate\Http\Request  $request
	 * @return bool
	 */
	public function matches(Route $route, Request $request);

}
=======
<?php namespace Illuminate\Routing\Matching;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

interface ValidatorInterface {

	/**
	 * Validate a given rule against a route and request.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  \Illuminate\Http\Request  $request
	 * @return bool
	 */
	public function matches(Route $route, Request $request);

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
