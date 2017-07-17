<?php namespace TooBasic\Ethereum\Schema\Object;
use TooBasic\Ethereum\Schema;

class FilterChange extends Schema\Object # generated by ClientGenerator based on schema.json
{
	public $removed;
	public $logIndex;
	public $transactionIndex;
	public $transactionHash;
	public $blockHash;
	public $blockNumber;
	public $address;
	public $data;
	public $topics;

	public function __construct(
		?bool $removed,
		?int $logIndex,
		?int $transactionIndex,
		?Schema\Primitive\Bytes32 $transactionHash,
		?Schema\Primitive\Bytes32 $blockHash,
		?int $blockNumber,
		?Schema\Primitive\Bytes20 $address,
		?Schema\Primitive\ArrayOrData $data,
		?array $topics
	){
		$this->removed = $removed;
		$this->logIndex = $logIndex;
		$this->transactionIndex = $transactionIndex;
		$this->transactionHash = $transactionHash;
		$this->blockHash = $blockHash;
		$this->blockNumber = $blockNumber;
		$this->address = $address;
		$this->data = $data;
		$this->topics = $topics;
	}
}
