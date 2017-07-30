<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema\Tag;

class QuantityOrTag extends MultiPrimitive
{
	const TYPES = ['Tag', 'Quantity'];

	public function __construct($data)
	{
		$this->data = $data;

		if ($data instanceof Tag)
			$this->type = 'Tag';
		elseif ($data instanceof Quantity)
			$this->type = 'Quantity';
		else
		{
			$this->type = self::TYPES[$data != Tag::EARLIEST && $data != Tag::LATEST && $data != Tag::PENDING];
			$this->data = new $this->type($data);
		}
	}

	public function encode()
	{
		return $this->data->encode();
	}
}