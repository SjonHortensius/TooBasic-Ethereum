<?php namespace TooBasic\Ethereum;
use TooBasic\Exception;

class Schema
{
	public static function decodeType(string $p): string
	{
		if (class_exists(__NAMESPACE__ .'\\Schema\\Object\\'. $p))
			return __NAMESPACE__.'\\Schema\Object\\'. $p;

		switch ($p)
		{
			case 'D':			return Schema\Primitive\Bytes::class;
			case 'D20':			return Schema\Primitive\Bytes20::class;
			case 'D32':			return Schema\Primitive\Bytes32::class;
			case 'B':			return 'bool';
			case 'S':			return 'string';
			case 'Q':			return Schema\Primitive\Quantity::class;
			case 'Array|DATA':	return Schema\Primitive\ArrayOrData::class;
			case 'Q|T':			return Schema\Primitive\QuantityOrTag::class;
			case 'B|EthSyncing':return Schema\Primitive\BooleanOrEthSyncing::class;
		}

		throw new Exception('Unknown type: `%s`', [$p]);
	}
}