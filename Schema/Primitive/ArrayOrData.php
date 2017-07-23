<?php namespace TooBasic\Ethereum\Schema\Primitive;

#FIXME data is undefined & unused by the spec; check if it is bytes/string
class ArrayOrData extends MultiPrimitive
{
	const TYPES = ['array', 'data'];

	public function __construct($data)
	{
		$this->type = self::TYPES[!is_array($data)];
		$this->data = $data;
	}

	public function encode()
	{
		return $this->data;
	}
}