<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema\Primitive;

class Bytes extends Primitive
{
	public function __construct(string $data)
	{
		if ('0x' == substr($data, 0, 2) || '0X' == substr($data, 0, 2))
			$data = substr($data, 2);

		$this->data = hex2bin($data);
	}

	public function encode()
	{
		return '0x'.bin2hex($this->data);
	}

	public function __debugInfo()
	{
		return ['data' => self::encode()];
	}
}