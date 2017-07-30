<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema\Object\EthSyncing;

class BooleanOrEthSyncing extends MultiPrimitive
{
	const TYPES = ['bool', 'EthSyncing'];

	public function __construct($data)
	{
		$this->type = self::TYPES[!is_bool($data)];

		if ('bool' == $this->type)
			$this->data = $data;
		else
			$this->data = EthSyncing::decode($data);
	}

	public function encode()
	{
		return $this->type=='bool' ? $this->data : $this->data->encode();
	}
}