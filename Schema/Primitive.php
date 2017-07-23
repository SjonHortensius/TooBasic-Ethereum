<?php namespace TooBasic\Ethereum\Schema;

abstract class Primitive
{
	public $data;
	abstract protected function __construct($data);

	public final static function decode($data)
	{
		return new static($data);
	}

	abstract public function encode();

	public function __toString()
	{
		return get_called_class() .'['. $this->data .']';
	}
}