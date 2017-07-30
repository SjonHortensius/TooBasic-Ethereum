<?php namespace TooBasic\Ethereum\Schema;

interface Type
{
	public static function decode($data);
	public function encode();
}