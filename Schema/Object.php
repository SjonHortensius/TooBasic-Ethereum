<?php namespace TooBasic\Ethereum\Schema;

class Object
{
	public static function decode(array $data)
	{
		// Determine order of constructor parameters
		$args = func_get_args(); $params = [];
		foreach ((new ReflectionMethod(get_called_class(), '__construct'))->getParameters() as $parameter)
			$params[$parameter->name] = array_shift($args);
var_dump(__CLASS__.__FUNCTION__, $params);die;
		return new static($data);
	}
}