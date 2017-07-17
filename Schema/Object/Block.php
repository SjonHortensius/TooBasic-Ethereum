<?php namespace TooBasic\Ethereum\Schema\Object;
use TooBasic\Ethereum\Schema;

class Block extends Schema\Object # generated by ClientGenerator based on schema.json
{
	public $number;
	public $hash;
	public $parentHash;
	public $nonce;
	public $sha3Uncles;
	public $logsBloom;
	public $transactionsRoot;
	public $stateRoot;
	public $receiptsRoot;
	public $miner;
	public $difficulty;
	public $totalDifficulty;
	public $extraData;
	public $size;
	public $gasLimit;
	public $gasUsed;
	public $timestamp;
	public $transactions;
	public $uncles;

	public function __construct(
		?int $number,
		?Schema\Primitive\Bytes32 $hash,
		?Schema\Primitive\Bytes32 $parentHash,
		?Schema\Primitive\Bytes $nonce,
		?Schema\Primitive\Bytes $sha3Uncles,
		?Schema\Primitive\Bytes $logsBloom,
		?Schema\Primitive\Bytes $transactionsRoot,
		?Schema\Primitive\Bytes $stateRoot,
		?Schema\Primitive\Bytes $receiptsRoot,
		?Schema\Primitive\Bytes $miner,
		?int $difficulty,
		?int $totalDifficulty,
		?Schema\Primitive\Bytes $extraData,
		?int $size,
		?int $gasLimit,
		?int $gasUsed,
		?int $timestamp,
		?array $transactions,
		?array $uncles
	){
		$this->number = $number;
		$this->hash = $hash;
		$this->parentHash = $parentHash;
		$this->nonce = $nonce;
		$this->sha3Uncles = $sha3Uncles;
		$this->logsBloom = $logsBloom;
		$this->transactionsRoot = $transactionsRoot;
		$this->stateRoot = $stateRoot;
		$this->receiptsRoot = $receiptsRoot;
		$this->miner = $miner;
		$this->difficulty = $difficulty;
		$this->totalDifficulty = $totalDifficulty;
		$this->extraData = $extraData;
		$this->size = $size;
		$this->gasLimit = $gasLimit;
		$this->gasUsed = $gasUsed;
		$this->timestamp = $timestamp;
		$this->transactions = $transactions;
		$this->uncles = $uncles;
	}
}
