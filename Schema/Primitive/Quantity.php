<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema\Primitive;

class Quantity extends Primitive
{
	public function __construct($data)
	{
		if ('0x' == substr($data, 0, 2) || '0X' == substr($data, 0, 2))
			$data = substr($data, 2);

		if (extension_loaded('bcmath'))
			$this->data = static::_bcDecode($data);
		else if (extension_loaded('gmp'))
			$this->data = static::_gmpDecode($data);
		else # (string)hex2bin($data) would be extremely imprecise
			throw new Exception('Please install `gmp` or `bcmath` extension to decode large numbers');
	}

	protected static function _bcDecode(string $hex): string
	{
		$dec = 0;
		$mult = 1;

		for ($i = strlen($hex)-1; $i>=0; $i--,$mult=bcpow('16', $mult))
			$dec = bcadd($dec, bcmul(hexdec($hex[$i]), $mult));

		return $dec;
	}

	protected static function _gmpDecode(string $hex): string
	{
		$dec = gmp_init(0);
		$mult = gmp_init(1);

		for ($i = strlen($hex)-1; $i>=0; $i--,$mult=gmp_mul($mult, 16))
			$dec = gmp_add($dec, gmp_mul($mult, hexdec($hex[$i])));

		return $dec;
	}

	public function encode()
	{
		return bin2hex($this->data);
	}
}