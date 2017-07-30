<?php namespace TooBasic\Ethereum\Schema;

abstract class Primitive implements Type
{
	public $data;

	public final static function decode($data)
	{
		if ($data instanceof static)
			return $data;
		else
			return new static($data);
	}

	abstract public function encode();

	public function __toString()
	{
		return get_called_class() .'['. $this->data .']';
	}
}