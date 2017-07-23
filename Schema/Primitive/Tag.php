<?php namespace TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Ethereum\Schema\Primitive;
use TooBasic\Exception;

class Tag extends Primitive
{
	const LATEST   = 'latest';
	const EARLIEST = 'earliest';
	const PENDING  = 'pending';

	public function __construct($data)
	{
		if ($data != Tag::EARLIEST && $data != Tag::LATEST && $data != Tag::PENDING)
			throw new Exception('Values `%s` is not a valid tag', [$data]);

		$this->data = $data;
	}

	public function encode()
	{
		return $this->data;
	}
}