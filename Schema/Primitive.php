<?php namespace TooBasic\Ethereum\Schema;

abstract class Primitive implements Type
{
	public $data;

	public static function decode($data)
	{
		return new static($data);
	}

	abstract public function encode();

	public function __toString()
	{
		return static::encode();
	}

	public function __debugInfo()
	{
		return ['data' => static::encode()];
	}
}