<?php namespace TooBasic\Ethereum\Schema\Object;
use TooBasic\Ethereum\Schema;

class SHHFilter extends Schema\Object\Base # generated by ClientGenerator based on schema.json
{
	public $to;
	public $topics;

	public function __construct(
		?Schema\Primitive\Bytes $to = null,
		array $topics
	){
		$this->to = $to;
		$this->topics = $topics;
	}
}
