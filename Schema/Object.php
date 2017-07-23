<?php namespace TooBasic\Ethereum\Schema;

abstract class Object
{
	protected static $_properties = [];

	public static function decode(array $data)
	{
		if (!isset(static::$_properties))
		{
			foreach ((new ReflectionMethod(get_called_class(), '__construct'))->getParameters() as $parameter)
				static::$_properties []= $parameter->name;
		}

		// Determine order of constructor parameters
		$args = func_get_args(); $params = [];
		foreach (static::$_properties as $parameter)
			$params[$parameter->name] = array_shift($args);

		return new static($data);
	}

	public function encode(): array
	{
		$return = [];

		foreach (static::$_properties as $property)
			$return[$property] = $this->$property;

		return $return;
	}
}