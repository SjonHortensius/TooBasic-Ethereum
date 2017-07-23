<?php namespace TooBasic\Ethereum;
use TooBasic\Rpc\Client as RpcClient;

class Client extends RpcClient\Json2 # generated by ClientGenerator based on schema.json
{
	public function web3_clientVersion(): string
	{ return (string)parent::__call('web3_clientVersion', []); }

	public function web3_sha3(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('web3_sha3', [$a])); }

	public function net_version(): string
	{ return (string)parent::__call('net_version', []); }

	public function net_peerCount(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('net_peerCount', [])); }

	public function net_listening(): bool
	{ return (bool)parent::__call('net_listening', []); }

	public function personal_sign(Schema\Primitive\Bytes20 $a, Schema\Primitive\Bytes $b, string $c): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('personal_sign', [$a->encode(), $b->encode(), $c])); }

	public function personal_ecRecover(Schema\Primitive\Bytes $a, Schema\Primitive\Bytes $b): Schema\Primitive\Bytes20
	{ return Schema\Primitive\Bytes20::decode(parent::__call('personal_ecRecover', [$a->encode(), $b->encode()])); }

	public function eth_protocolVersion(): string
	{ return (string)parent::__call('eth_protocolVersion', []); }

	public function eth_syncing(): Schema\Primitive\BooleanOrEthSyncing
	{ return Schema\Primitive\BooleanOrEthSyncing::decode(parent::__call('eth_syncing', [])); }

	public function eth_coinbase(): Schema\Primitive\Bytes20
	{ return Schema\Primitive\Bytes20::decode(parent::__call('eth_coinbase', [])); }

	public function eth_mining(): bool
	{ return (bool)parent::__call('eth_mining', []); }

	public function eth_hashrate(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_hashrate', [])); }

	public function eth_gasPrice(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_gasPrice', [])); }

	public function eth_accounts(): array
	{ return parent::__call('eth_accounts', []); }

	public function eth_blockNumber(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_blockNumber', [])); }

	public function eth_getBalance(Schema\Primitive\Bytes20 $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_getBalance', [$a->encode(), $b->encode()])); }

	public function eth_getStorageAt(Schema\Primitive\Bytes20 $a, Schema\Primitive\Quantity $b, Schema\Primitive\QuantityOrTag $c): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_getStorageAt', [$a->encode(), $b->encode(), $c->encode()])); }

	public function eth_getTransactionCount(Schema\Primitive\Bytes20 $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_getTransactionCount', [$a->encode(), $b->encode()])); }

	public function eth_getBlockTransactionCountByHash(Schema\Primitive\Bytes32 $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_getBlockTransactionCountByHash', [$a->encode()])); }

	public function eth_getBlockTransactionCountByNumber(Schema\Primitive\QuantityOrTag $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_getBlockTransactionCountByNumber', [$a->encode()])); }

	public function eth_getUncleCountByBlockHash(Schema\Primitive\Bytes32 $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_getUncleCountByBlockHash', [$a->encode()])); }

	public function eth_getUncleCountByBlockNumber(Schema\Primitive\Quantity $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_getUncleCountByBlockNumber', [$a->encode()])); }

	public function eth_getCode(Schema\Primitive\Bytes20 $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_getCode', [$a->encode(), $b->encode()])); }

	public function eth_sign(Schema\Primitive\Bytes20 $a, Schema\Primitive\Bytes32 $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_sign', [$a->encode(), $b->encode()])); }

	public function eth_sendTransaction(Schema\Object\SendTransaction $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_sendTransaction', [$a->encode()])); }

	public function eth_sendRawTransaction(Schema\Primitive\Bytes $a): Schema\Primitive\Bytes32
	{ return Schema\Primitive\Bytes32::decode(parent::__call('eth_sendRawTransaction', [$a->encode()])); }

	public function eth_call(Schema\Object\CallTransaction $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_call', [$a->encode(), $b->encode()])); }

	public function eth_estimateGas(Schema\Object\EstimateTransaction $a, Schema\Primitive\QuantityOrTag $b): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_estimateGas', [$a->encode(), $b->encode()])); }

	public function eth_getBlockByHash(Schema\Primitive\Bytes32 $a, bool $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::__call('eth_getBlockByHash', [$a->encode(), $b])); }

	public function eth_getBlockByNumber(Schema\Primitive\QuantityOrTag $a, bool $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::__call('eth_getBlockByNumber', [$a->encode(), $b])); }

	public function eth_getTransactionByHash(Schema\Primitive\Bytes32 $a): Schema\Object\Transaction
	{ return Schema\Object\Transaction::decode(parent::__call('eth_getTransactionByHash', [$a->encode()])); }

	public function eth_getTransactionByBlockHashAndIndex(Schema\Primitive\Bytes32 $a, Schema\Primitive\Quantity $b): Schema\Object\Transaction
	{ return Schema\Object\Transaction::decode(parent::__call('eth_getTransactionByBlockHashAndIndex', [$a->encode(), $b->encode()])); }

	public function eth_getTransactionByBlockNumberAndIndex(Schema\Primitive\QuantityOrTag $a, Schema\Primitive\Quantity $b): Schema\Object\Transaction
	{ return Schema\Object\Transaction::decode(parent::__call('eth_getTransactionByBlockNumberAndIndex', [$a->encode(), $b->encode()])); }

	public function eth_getTransactionReceipt(Schema\Primitive\Bytes32 $a): Schema\Object\Receipt
	{ return Schema\Object\Receipt::decode(parent::__call('eth_getTransactionReceipt', [$a->encode()])); }

	public function eth_getUncleByBlockHashAndIndex(Schema\Primitive\Bytes32 $a, Schema\Primitive\Quantity $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::__call('eth_getUncleByBlockHashAndIndex', [$a->encode(), $b->encode()])); }

	public function eth_getUncleByBlockNumberAndIndex(Schema\Primitive\QuantityOrTag $a, Schema\Primitive\Quantity $b): Schema\Object\Block
	{ return Schema\Object\Block::decode(parent::__call('eth_getUncleByBlockNumberAndIndex', [$a->encode(), $b->encode()])); }

	public function eth_getCompilers(): array
	{ return parent::__call('eth_getCompilers', []); }

	public function eth_compileLLL(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_compileLLL', [$a])); }

	public function eth_compileSolidity(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_compileSolidity', [$a])); }

	public function eth_compileSerpent(string $a): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('eth_compileSerpent', [$a])); }

	public function eth_newFilter(Schema\Object\Filter $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_newFilter', [$a->encode()])); }

	public function eth_newBlockFilter(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_newBlockFilter', [])); }

	public function eth_newPendingTransactionFilter(): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('eth_newPendingTransactionFilter', [])); }

	public function eth_uninstallFilter(Schema\Primitive\Quantity $a): bool
	{ return (bool)parent::__call('eth_uninstallFilter', [$a->encode()]); }

	public function eth_getFilterChanges(Schema\Primitive\Quantity $a): array
	{ return parent::__call('eth_getFilterChanges', [$a->encode()]); }

	public function eth_getFilterLogs(Schema\Primitive\Quantity $a): array
	{ return parent::__call('eth_getFilterLogs', [$a->encode()]); }

	public function eth_getLogs(Schema\Object\Filter $a): array
	{ return parent::__call('eth_getLogs', [$a->encode()]); }

	public function eth_getWork(): array
	{ return parent::__call('eth_getWork', []); }

	public function eth_submitWork(Schema\Primitive\Bytes $a, Schema\Primitive\Bytes32 $b, Schema\Primitive\Bytes32 $c): bool
	{ return (bool)parent::__call('eth_submitWork', [$a->encode(), $b->encode(), $c->encode()]); }

	public function eth_submitHashrate(Schema\Primitive\Bytes $a, Schema\Primitive\Bytes $b): bool
	{ return (bool)parent::__call('eth_submitHashrate', [$a->encode(), $b->encode()]); }

	public function db_putString(string $a, string $b, string $c): bool
	{ return (bool)parent::__call('db_putString', [$a, $b, $c]); }

	public function db_getString(string $a, string $b): string
	{ return (string)parent::__call('db_getString', [$a, $b]); }

	public function db_putHex(string $a, string $b, Schema\Primitive\Bytes $c): bool
	{ return (bool)parent::__call('db_putHex', [$a, $b, $c->encode()]); }

	public function db_getHex(string $a, string $b): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('db_getHex', [$a, $b])); }

	public function shh_post(Schema\Object\SHHPost $a): bool
	{ return (bool)parent::__call('shh_post', [$a->encode()]); }

	public function shh_version(): string
	{ return (string)parent::__call('shh_version', []); }

	public function shh_newIdentity(): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('shh_newIdentity', [])); }

	public function shh_hasIdentity(Schema\Primitive\Bytes $a): bool
	{ return (bool)parent::__call('shh_hasIdentity', [$a->encode()]); }

	public function shh_newGroup(): Schema\Primitive\Bytes
	{ return Schema\Primitive\Bytes::decode(parent::__call('shh_newGroup', [])); }

	public function shh_addToGroup(Schema\Primitive\Bytes $a): bool
	{ return (bool)parent::__call('shh_addToGroup', [$a->encode()]); }

	public function shh_newFilter(Schema\Object\SHHFilter $a): Schema\Primitive\Quantity
	{ return Schema\Primitive\Quantity::decode(parent::__call('shh_newFilter', [$a->encode()])); }

	public function shh_uninstallFilter(Schema\Primitive\Quantity $a): bool
	{ return (bool)parent::__call('shh_uninstallFilter', [$a->encode()]); }

	public function shh_getFilterChanges(Schema\Primitive\Quantity $a): array
	{ return parent::__call('shh_getFilterChanges', [$a->encode()]); }

	public function shh_getMessages(Schema\Primitive\Quantity $a): array
	{ return parent::__call('shh_getMessages', [$a->encode()]); }
}
