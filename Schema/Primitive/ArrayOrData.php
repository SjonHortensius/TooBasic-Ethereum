<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema\Object\EthSyncing;

class ArrayOrData extends MultiPrimitive
{
	const TYPES = ['array', 'Bytes'];

	public function __construct($data)
	{
		$this->type = self::TYPES[!is_array($data)];

		if ('array' == $this->type)
			$this->data = $data;
		else
			$this->data = Bytes::decode($data);
	}

	public function encode()
	{
		return $this->type=='array' ? $this->data : $this->data->encode();
	}
}