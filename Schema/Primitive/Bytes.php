<?php namespace TooBasic\Ethereum\Schema\Primitive;

class Bytes
{
	public function __construct(string $bytes)
	{
		$this->data = hex2bin($bytes);
	}

	public function encode()
	{
		return '0x'.bin2hex($this->data);
	}
}