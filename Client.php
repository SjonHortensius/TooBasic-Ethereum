<?php namespace TooBasic\Ethereum;
use TooBasic\Rpc\Client as RpcClient;

class Client extends RpcClient\Json2 # generated by ClientGenerator based on schema.json
{
	public function web3_clientVersion(): string
	{ return (string)parent::web3_clientVersion(); }

	public function web3_sha3(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::web3_sha3($a)); }

	public function net_version(): string
	{ return (string)parent::net_version(); }

	public function net_peerCount(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::net_peerCount()); }

	public function net_listening(): bool
	{ return (bool)parent::net_listening(); }

	public function personal_sign(Schema\Primitive\Bytes $a, Schema\Primitive\Bytes20 $b, string $c): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::personal_sign(isset($a)?$a->encode():null, isset($b)?$b->encode():null, $c)); }

	public function personal_ecRecover(Schema\Primitive\Bytes $a, Schema\Primitive\Bytes $b): Schema\Primitive\Bytes20
	{ return Schema\Primitive\Bytes20::decode(parent::personal_ecRecover(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_protocolVersion(): string
	{ return (string)parent::eth_protocolVersion(); }

	public function eth_syncing(): Schema\Primitive\BooleanOrEthSyncing
	{ return Schema\Primitive\BooleanOrEthSyncing::decode(parent::eth_syncing()); }

	public function eth_coinbase(): Schema\Primitive\Bytes20
	{ return Schema\Primitive\Bytes20::decode(parent::eth_coinbase()); }

	public function eth_mining(): bool
	{ return (bool)parent::eth_mining(); }

	public function eth_hashrate(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_hashrate()); }

	public function eth_gasPrice(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_gasPrice()); }

	/**
	 * @returns Schema\Primitive\Bytes20[]
	 */
	public function eth_accounts(): array
	{ return array_map(function ($x){ return isset($x)?Schema\Primitive\Bytes20::decode($x):null; }, parent::eth_accounts()); }

	public function eth_blockNumber(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_blockNumber()); }

	public function eth_getBalance(Schema\Primitive\Bytes20 $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_getBalance(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_getStorageAt(Schema\Primitive\Bytes20 $a, Schema\Primitive\Quantity $b, Schema\Primitive\QuantityOrTag $c): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_getStorageAt(isset($a)?$a->encode():null, isset($b)?$b->encode():null, isset($c)?$c->encode():null)); }

	public function eth_getTransactionCount(Schema\Primitive\Bytes20 $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_getTransactionCount(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_getBlockTransactionCountByHash(Schema\Primitive\Bytes32 $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_getBlockTransactionCountByHash(isset($a)?$a->encode():null)); }

	public function eth_getBlockTransactionCountByNumber(Schema\Primitive\QuantityOrTag $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_getBlockTransactionCountByNumber(isset($a)?$a->encode():null)); }

	public function eth_getUncleCountByBlockHash(Schema\Primitive\Bytes32 $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_getUncleCountByBlockHash(isset($a)?$a->encode():null)); }

	public function eth_getUncleCountByBlockNumber(Schema\Primitive\Quantity $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_getUncleCountByBlockNumber(isset($a)?$a->encode():null)); }

	public function eth_getCode(Schema\Primitive\Bytes20 $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_getCode(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_sign(Schema\Primitive\Bytes20 $a, Schema\Primitive\Bytes $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_sign(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_signTypedData(Schema\Primitive\ArrayOrData $a, Schema\Primitive\Bytes20 $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_signTypedData(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_sendTransaction(Schema\Object\SendTransaction $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_sendTransaction(isset($a)?$a->encode():null)); }

	public function eth_sendRawTransaction(Schema\Primitive\Bytes $a): Schema\Primitive\Bytes32
	{ return Schema\Primitive\Bytes32::decode(parent::eth_sendRawTransaction(isset($a)?$a->encode():null)); }

	public function eth_call(Schema\Object\CallTransaction $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_call(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_estimateGas(Schema\Object\EstimateTransaction $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_estimateGas(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_getBlockByHash(Schema\Primitive\Bytes32 $a, bool $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::eth_getBlockByHash(isset($a)?$a->encode():null, $b)); }

	public function eth_getBlockByNumber(Schema\Primitive\QuantityOrTag $a, bool $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::eth_getBlockByNumber(isset($a)?$a->encode():null, $b)); }

	public function eth_getTransactionByHash(Schema\Primitive\Bytes32 $a): Schema\Object\Transaction
	{ return Schema\Object\Transaction::decode(parent::eth_getTransactionByHash(isset($a)?$a->encode():null)); }

	public function eth_getTransactionByBlockHashAndIndex(Schema\Primitive\Bytes32 $a, Schema\Primitive\Quantity $b): Schema\Object\Transaction
	{ return Schema\Object\Transaction::decode(parent::eth_getTransactionByBlockHashAndIndex(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_getTransactionByBlockNumberAndIndex(Schema\Primitive\QuantityOrTag $a, Schema\Primitive\Quantity $b): Schema\Object\Transaction
	{ return Schema\Object\Transaction::decode(parent::eth_getTransactionByBlockNumberAndIndex(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_getTransactionReceipt(Schema\Primitive\Bytes32 $a): Schema\Object\Receipt
	{ return Schema\Object\Receipt::decode(parent::eth_getTransactionReceipt(isset($a)?$a->encode():null)); }

	public function eth_getUncleByBlockHashAndIndex(Schema\Primitive\Bytes32 $a, Schema\Primitive\Quantity $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::eth_getUncleByBlockHashAndIndex(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	public function eth_getUncleByBlockNumberAndIndex(Schema\Primitive\QuantityOrTag $a, Schema\Primitive\Quantity $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::eth_getUncleByBlockNumberAndIndex(isset($a)?$a->encode():null, isset($b)?$b->encode():null)); }

	/**
	 * @returns string[]
	 */
	public function eth_getCompilers(): array
	{ return array_map(function ($x){ return $x; }, parent::eth_getCompilers()); }

	public function eth_compileLLL(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_compileLLL($a)); }

	public function eth_compileSolidity(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_compileSolidity($a)); }

	public function eth_compileSerpent(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::eth_compileSerpent($a)); }

	public function eth_newFilter(Schema\Object\Filter $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_newFilter(isset($a)?$a->encode():null)); }

	public function eth_newBlockFilter(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_newBlockFilter()); }

	public function eth_newPendingTransactionFilter(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::eth_newPendingTransactionFilter()); }

	public function eth_uninstallFilter(Schema\Primitive\PaddedQuantity $a): bool
	{ return (bool)parent::eth_uninstallFilter(isset($a)?$a->encode():null); }

	/**
	 * @returns Schema\Object\FilterChange[]
	 */
	public function eth_getFilterChanges(Schema\Primitive\PaddedQuantity $a): array
	{ return array_map(function ($x){ return isset($x)?Schema\Object\FilterChange::decode($x):null; }, parent::eth_getFilterChanges(isset($a)?$a->encode():null)); }

	/**
	 * @returns Schema\Object\FilterChange[]
	 */
	public function eth_getFilterLogs(Schema\Primitive\PaddedQuantity $a): array
	{ return array_map(function ($x){ return isset($x)?Schema\Object\FilterChange::decode($x):null; }, parent::eth_getFilterLogs(isset($a)?$a->encode():null)); }

	/**
	 * @returns Schema\Object\FilterChange[]
	 */
	public function eth_getLogs(Schema\Object\Filter $a): array
	{ return array_map(function ($x){ return isset($x)?Schema\Object\FilterChange::decode($x):null; }, parent::eth_getLogs(isset($a)?$a->encode():null)); }

	/**
	 * @returns Schema\Primitive\Bytes[]
	 */
	public function eth_getWork(): array
	{ return array_map(function ($x){ return isset($x)?Schema\Primitive\Bytes::decode($x):null; }, parent::eth_getWork()); }

	public function eth_submitWork(Schema\Primitive\Bytes $a, Schema\Primitive\Bytes32 $b, Schema\Primitive\Bytes32 $c): bool
	{ return (bool)parent::eth_submitWork(isset($a)?$a->encode():null, isset($b)?$b->encode():null, isset($c)?$c->encode():null); }

	public function eth_submitHashrate(Schema\Primitive\Bytes $a, Schema\Primitive\Bytes $b): bool
	{ return (bool)parent::eth_submitHashrate(isset($a)?$a->encode():null, isset($b)?$b->encode():null); }

	public function db_putString(string $a, string $b, string $c): bool
	{ return (bool)parent::db_putString($a, $b, $c); }

	public function db_getString(string $a, string $b): string
	{ return (string)parent::db_getString($a, $b); }

	public function db_putHex(string $a, string $b, Schema\Primitive\Bytes $c): bool
	{ return (bool)parent::db_putHex($a, $b, isset($c)?$c->encode():null); }

	public function db_getHex(string $a, string $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::db_getHex($a, $b)); }

	public function shh_post(Schema\Object\SHHPost $a): bool
	{ return (bool)parent::shh_post(isset($a)?$a->encode():null); }

	public function shh_version(): string
	{ return (string)parent::shh_version(); }

	public function shh_newIdentity(): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::shh_newIdentity()); }

	public function shh_hasIdentity(Schema\Primitive\Bytes $a): bool
	{ return (bool)parent::shh_hasIdentity(isset($a)?$a->encode():null); }

	public function shh_newGroup(): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::shh_newGroup()); }

	public function shh_addToGroup(Schema\Primitive\Bytes $a): bool
	{ return (bool)parent::shh_addToGroup(isset($a)?$a->encode():null); }

	public function shh_newFilter(Schema\Object\SHHFilter $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::shh_newFilter(isset($a)?$a->encode():null)); }

	public function shh_uninstallFilter(Schema\Primitive\Quantity $a): bool
	{ return (bool)parent::shh_uninstallFilter(isset($a)?$a->encode():null); }

	/**
	 * @returns Schema\Object\SHHFilterChange[]
	 */
	public function shh_getFilterChanges(Schema\Primitive\Quantity $a): array
	{ return array_map(function ($x){ return isset($x)?Schema\Object\SHHFilterChange::decode($x):null; }, parent::shh_getFilterChanges(isset($a)?$a->encode():null)); }

	/**
	 * @returns Schema\Object\SHHFilterChange[]
	 */
	public function shh_getMessages(Schema\Primitive\Quantity $a): array
	{ return array_map(function ($x){ return isset($x)?Schema\Object\SHHFilterChange::decode($x):null; }, parent::shh_getMessages(isset($a)?$a->encode():null)); }
}
