<?php namespace TooBasic\Ethereum\Schema\Object;
use TooBasic\Ethereum\Schema;

class EthSyncing extends Schema\Object # generated by ClientGenerator based on schema.json
{
	public $startingBlock;
	public $currentBlock;
	public $highestBlock;

	public function __construct(
		?int $startingBlock,
		?int $currentBlock,
		?int $highestBlock
	){
		$this->startingBlock = $startingBlock;
		$this->currentBlock = $currentBlock;
		$this->highestBlock = $highestBlock;
	}
}