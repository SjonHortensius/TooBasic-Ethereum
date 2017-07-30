# TooBasic-Ethereum
A very basic Ethereum client for PHP; with strict typehints for arguments and return values, for more info on methods see the [RPC documentation](https://github.com/paritytech/parity/wiki/JSONRPC-eth-module).

Based on the [schema description in ethjs](https://github.com/SjonHortensius/ethjs-schema/blob/67c3badad07b72649f057a3f7d6039b4d01a03d2/src/schema.json) this client offers a way to connect to any [parity](https://github.com/ethcore/parity) or [geth](https://github.com/ethereum/go-ethereum/) server using PHP.

## Example usage:

```php
// Simple autoloader to find Ethereum & Rpc client
spl_autoload_register(function($class){
	$class = str_replace('\\', '/', $class);

	if (0 === strpos($class, 'TooBasic/Ethereum/'))
		require('TooBasic-Ethereum/'. substr($class, strlen('TooBasic/Ethereum/')) .'.php');
	elseif (0 === strpos($class, 'TooBasic/Rpc/'))
		require('TooBasic-Rpc/'. substr($class, strlen('TooBasic/Rpc/')) .'.php');
	elseif (file_exists($class .'.php'))
		require($class .'.php');
});

// Setup an RPC connection with a curl transport
$curl = new TooBasic\Rpc\Transport\Curl;
self::$client = new TooBasic\Ethereum\Client('http://127.0.0.1:8546', $curl);
self::$client->setNamedParameters(false);

// You can call any method your ethereum node supports
var_dump('Local sync-status: ', self::$client->eth_syncing());
var_dump('Local last-block:', self::$client->eth_blockNumber());
var_dump('Foundation tip-jar balance (in wei):', self::$client->eth_getBalance(
	new Schema\Primitive\Bytes20('fB6916095ca1df60bB79Ce92cE3Ea74c37c5d359'),
	new Schema\Primitive\QuantityOrTag(Schema\Primitive\Tag::decode('latest'))
));

// Show the contents of a complete block including all transactions:
var_dump(self::$client->eth_getBlockByNumber(new Schema\Primitive\QuantityOrTag(new Schema\Primitive\Quantity(dechex(4000000))), true));

```

## Supported primitives:

* Bytes / Bytes20 / Bytes32
* Quantity (with `bcmath` / `gmp` as backend for large numbers)
* Tag (a simple wrapper for the latest/earliest/pending tag)
* boolean - supported by using native PHP booleans
* string - supported by using native PHP booleans

Since the API has a few methods that require or return different primitives, we have 3 wrappers to represent those:
* BooleanOrEthSyncing
* ArrayOrData
* QuantityOrTag

## Supported objects:

Since I parse the schema and generate all objects dynamically, this means you can [regenerate all Objects](https://github.com/SjonHortensius/TooBasic-Ethereum/blob/master/ClientGenerator.php) using `php ClientGenerator.php`. Currently this generates:

* EthSyncing
* Block
* Receipt
* Transaction
* CallTransaction
* EstimateTransaction
* SendTransaction
* Filter
* FilterChange
* SHHMessage
* SHHPost
* SHHFilterChange
* SHHFilter
