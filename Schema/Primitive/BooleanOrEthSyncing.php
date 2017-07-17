<?php namespace TooBasic\Ethereum\Schema\Primitive;

class BooleanOrEthSyncing extends MultiPrimitive
{
	public $data;
	public $type;

	public function __construct($data)
	{
		$this->data = $data;
		$this->type = is_bool($data) ? 'Boolean' : 'EthSyncing';
	}
}