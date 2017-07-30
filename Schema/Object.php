<?php namespace TooBasic\Ethereum\Schema;
use TooBasic\Ethereum\Schema;
use TooBasic\Exception;

abstract class Object implements Type
{
	private static $_properties = [];
	const PROPERTY_ARRAYS = [
#FIXME	'topics' => '',
		'transactions' => Schema\Object\Transaction::class,
		'uncles' => Schema\Primitive\Bytes::class,
	];

	// This gets called by the Client for method-results
	public static function decode($data)
	{
		if (!isset($data))
			return null;

		if (!$data instanceof \stdClass)
			throw new Exception('%s expects only objects to decode, not %s', [__CLASS__, gettype($data)]);

		// Determine order of constructor parameters | Decode individual parameters as well
		$params = [];
		foreach (self::_getClassProperties(get_called_class()) as $name => $type)
		{
			// Not all properties are required
			if (!isset($data->$name))
				$value = null;
			elseif (class_exists($type))
				$value = call_user_func([$type, 'decode'], $data->$name);
			elseif ($type == 'array' && isset(self::PROPERTY_ARRAYS[$name]))
				$value = array_map([ self::PROPERTY_ARRAYS[$name], 'decode'], $data->$name);
			else
				$value = $data->$name;

			$params[] = $value;
		}

		return (new \ReflectionClass(get_called_class()))->newInstanceArgs($params);
	}

	private static function _getClassProperties($class)
	{
		if (!isset(self::$_properties[$class]))
			foreach ((new \ReflectionMethod($class, '__construct'))->getParameters() as $parameter)
				self::$_properties[$class][$parameter->name] = (string)$parameter->getType();

		return self::$_properties[$class];
	}

	public function encode(): array
	{
		$return = [];

		foreach (self::_getClassProperties(get_called_class()) as $name => $type)
			if (0 === strpos($type, Schema::class))
				$return[$name] = $this->$name->encode();
			else
				$return[$name] = $this->$name;

		return $return;
	}
}