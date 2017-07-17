<?php namespace TooBasic\Ethereum\Schema\Primitive;

class Bytes
{
	public $data;

	public function __construct(string $bytes)
	{
		$this->data = $bytes;
	}

	public static function decode(string $hex)
	{
		return new static(hex2bin($hex));
	}

	public function encode()
	{
		return bin2hex($this->data);
	}
}