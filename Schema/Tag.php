<?php namespace TooBasic\Ethereum\Schema;
use TooBasic\Exception;

class Tag implements Type
{
	const LATEST   = 'latest';
	const EARLIEST = 'earliest';
	const PENDING  = 'pending';
	const ALLOWED = [self::LATEST, self::EARLIEST, self::PENDING];

	public $data;

	public function __construct(string $tag)
	{
		if (!in_array($tag, self::ALLOWED))
			throw new Exception('Unknown tag `%s`', $tag);

		$this->data = $tag;
	}

	public final static function decode($data)
	{
		if ($data instanceof static)
			return $data;
		else
			return new static($data);
	}

	public function encode()
	{
		return $this->data;
	}
}