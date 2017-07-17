<?php namespace TooBasic\Ethereum\Schema\Primitive;

abstract class MultiPrimitive
{
	public static function decode($data)
	{
		return new static($data);
	}
}