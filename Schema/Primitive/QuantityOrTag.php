<?php namespace TooBasic\Ethereum\Schema\Primitive;

class QuantityOrTag extends MultiPrimitive
{
	const TAGS = ['latest', 'earliest', 'pending'];
	public $data;
	public $type;

	public function __construct($data)
	{
		$this->data = $data;
		$this->type = in_array($this->data, self::TAGS) ? 'tag' : 'quantity';
	}
}