<?php namespace TooBasic\Ethereum\Schema\Object;
use TooBasic\Ethereum\Schema;

class EstimateTransaction extends Schema\Object # generated by ClientGenerator based on schema.json
{
	public $from;
	public $to;
	public $gas;
	public $gasPrice;
	public $value;
	public $data;
	public $nonce;

	public function __construct(
		?Schema\Primitive\Bytes20 $from,
		?Schema\Primitive\Bytes20 $to,
		?int $gas,
		?int $gasPrice,
		?int $value,
		?Schema\Primitive\Bytes $data,
		?int $nonce
	){
		$this->from = $from;
		$this->to = $to;
		$this->gas = $gas;
		$this->gasPrice = $gasPrice;
		$this->value = $value;
		$this->data = $data;
		$this->nonce = $nonce;
	}
}
