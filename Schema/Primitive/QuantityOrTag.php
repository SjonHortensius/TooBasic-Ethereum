<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema;
use TooBasic\Ethereum\Schema\Tag;

class QuantityOrTag extends MultiPrimitive
{
	const TYPES = ['Tag', 'Quantity'];

	public function __construct($data)
	{
		$this->type = self::TYPES[$data != Tag::EARLIEST && $data != Tag::LATEST && $data != Tag::PENDING];

		if ('Tag' == $this->type)
			$this->data = new Tag($data);
		else
			$this->data = new Schema\Primitive\Quantity($data);
	}

	public function encode()
	{
		return $this->data->encode();
	}
}