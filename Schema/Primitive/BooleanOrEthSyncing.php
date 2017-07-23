<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema\Object\EthSyncing;

class BooleanOrEthSyncing extends MultiPrimitive
{
	const TYPES = ['bool', 'EthSyncing'];

	public function __construct($data)
	{
		if (is_bool($data))
		{
			$this->type = 'bool';
			$this->data = $data;
		}
		else
		{
			$this->type = 'EthSyncing';

			if (!$data instanceof EthSyncing)
				$this->data = EthSyncing::decode($data);
		}
	}

	public function encode()
	{
		return $this->type=='bool' ? $this->data : $this->data->encode();
	}
}