<?php namespace TooBasic\Ethereum\Schema;

use TooBasic\Exception;

class Tags
{
	public $data;
	const ALLOWED = ['latest', 'earliest', 'pending'];

	public function __construct(string $tag)
	{
		if (!in_array($tag, self::ALLOWED))
			throw new Exception('Unknown tag `%s`', $tag);

		$this->data = $tag;
	}
}