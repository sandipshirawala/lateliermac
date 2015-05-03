<<<<<<< HEAD
<?php namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\BeanstalkdQueue;
use Pheanstalk_Pheanstalk as Pheanstalk;
use Pheanstalk_PheanstalkInterface as PheanstalkInterface;

class BeanstalkdConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param  array  $config
	 * @return \Illuminate\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		$pheanstalk = new Pheanstalk($config['host'], array_get($config, 'port', PheanstalkInterface::DEFAULT_PORT));

		return new BeanstalkdQueue(
			$pheanstalk, $config['queue'], array_get($config, 'ttr', Pheanstalk::DEFAULT_TTR)
		);
	}

}
=======
<?php namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\BeanstalkdQueue;
use Pheanstalk_Pheanstalk as Pheanstalk;
use Pheanstalk_PheanstalkInterface as PheanstalkInterface;

class BeanstalkdConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param  array  $config
	 * @return \Illuminate\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		$pheanstalk = new Pheanstalk($config['host'], array_get($config, 'port', PheanstalkInterface::DEFAULT_PORT));

		return new BeanstalkdQueue(
			$pheanstalk, $config['queue'], array_get($config, 'ttr', Pheanstalk::DEFAULT_TTR)
		);
	}

}
>>>>>>> cba00a42a2a4947d725fd367f45b2c8d4f56f744
