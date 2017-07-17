<?php namespace TooBasic\Ethereum\Schema\Object;
use TooBasic\Ethereum\Schema;

class Filter extends Schema\Object # generated by ClientGenerator based on schema.json
{
	public $fromBlock;
	public $toBlock;
	public $address;
	public $topics;

	public function __construct(
		?Schema\Primitive\QuantityOrTag $fromBlock,
		?Schema\Primitive\QuantityOrTag $toBlock,
		?Schema\Primitive\ArrayOrData $address,
		?array $topics
	){
		$this->fromBlock = $fromBlock;
		$this->toBlock = $toBlock;
		$this->address = $address;
		$this->topics = $topics;
	}
}