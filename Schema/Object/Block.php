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
		?Schema\Primitive\Quantity $number = null,
		?Schema\Primitive\Bytes32 $hash = null,
		?Schema\Primitive\Bytes32 $parentHash = null,
		?Schema\Primitive\Bytes $nonce = null,
		?Schema\Primitive\Bytes $sha3Uncles = null,
		?Schema\Primitive\Bytes $logsBloom = null,
		?Schema\Primitive\Bytes $transactionsRoot = null,
		?Schema\Primitive\Bytes $stateRoot = null,
		?Schema\Primitive\Bytes $receiptsRoot = null,
		?Schema\Primitive\Bytes $miner = null,
		?Schema\Primitive\Quantity $difficulty = null,
		?Schema\Primitive\Quantity $totalDifficulty = null,
		?Schema\Primitive\Bytes $extraData = null,
		?Schema\Primitive\Quantity $size = null,
		?Schema\Primitive\Quantity $gasLimit = null,
		?Schema\Primitive\Quantity $gasUsed = null,
		?Schema\Primitive\Quantity $timestamp = null,
		?array $transactions = null,
		?array $uncles = null
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
