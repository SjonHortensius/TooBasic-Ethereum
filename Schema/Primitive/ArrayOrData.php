<?php namespace TooBasic\Ethereum\Schema\Primitive;

class ArrayOrData extends MultiPrimitive
{
	public $data;
	public $type;

	public function __construct($data)
	{
		$this->data = $data;
		$this->type = is_array($data) ? 'array' : 'data';
	}
}