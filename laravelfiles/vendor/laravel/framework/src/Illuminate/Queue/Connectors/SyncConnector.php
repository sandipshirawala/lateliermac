<<<<<<< HEAD
<?php namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\SyncQueue;

class SyncConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param  array  $config
	 * @return \Illuminate\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		return new SyncQueue;
	}

}
=======
<?php namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\SyncQueue;

class SyncConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param  array  $config
	 * @return \Illuminate\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		return new SyncQueue;
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
