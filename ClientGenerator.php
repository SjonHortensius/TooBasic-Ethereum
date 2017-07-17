<?php namespace TooBasic\Ethereum;

include 'Schema.php';
include 'Schema/Object.php';
include '../TooBasic/Exception.php';

class ClientGenerator
{
	public static function generate()
	{
		// Source: https://raw.githubusercontent.com/ethjs/ethjs-schema/master/src/schema.json
		$schema = json_decode(file_get_contents('schema.json'));

		foreach ($schema->objects as $name => $spec)
		{
			$requiredParams = $spec->__required;
			unset($spec->__required);

			$params = [];
			$props = [];
			$constructor = [];
			foreach ($spec as $paramName => $type)
			{
				if (is_array($type))
					$type = 'array';
				else
					$type = str_replace('TooBasic\\Ethereum\\', '', Schema::decodeType($type));

				$params [] = (in_array($paramName, $requiredParams) ? '' : '?') . $type . ' $' . $paramName;
				$props []= "public \$$paramName;";
				$constructor []= "\$this->$paramName = \$$paramName;";
			}

			$object = "<?php namespace TooBasic\\Ethereum\\Schema\\Object;
use TooBasic\\Ethereum\\Schema;

class $name extends Schema\\Object # generated by ClientGenerator based on schema.json
{
	". implode("\n\t", $props) ."

	public function __construct(
		". implode(",\n\t\t", $params) ."
	){
		". implode("\n\t\t", $constructor) ."
	}
}
";
			file_put_contents('Schema/Object/' . $name . '.php', $object);
			include('Schema/Object/' . $name . '.php');
		}

		$object = "<?php namespace TooBasic\\Ethereum;
use TooBasic\Rpc\Client as RpcClient;

class Client extends RpcClient\\Json2 # generated by ClientGenerator based on schema.json
{";
		foreach ($schema->methods as $name => $spec)
		{
			$params = [];
			foreach ($spec[0] as $i => $param)
			{
				$paramName = '$'. chr(97 + $i);
				$type = str_replace('TooBasic\\Ethereum\\', '', Schema::decodeType($param));
				$params[$paramName] = $type .' '. $paramName;
			}
			$return = "parent::__call('$name', [". implode(', ', array_keys($params)) ."])";

			if (is_array($spec[1]))
				$returnType = 'array';
			else
			{
				$returnType = str_replace('TooBasic\\Ethereum\\', '', Schema::decodeType($spec[1]));

				if (false !== strpos($returnType, 'Schema\\'))
					$return = $returnType .'::decode('.$return.')';
				elseif ($returnType == 'int')
					$return = 'hexdec('. $return. ')';
				else # for bool / string
					$return = '('.$returnType.')'. $return;
			}

			$object .= "\n\tpublic function $name(". implode(', ', $params) ."): $returnType\n\t{ return $return; }\n";
		}


		$object .= "}\n";

		file_put_contents('Client.php', $object);
	}
}

chdir(__DIR__);
ClientGenerator::generate();