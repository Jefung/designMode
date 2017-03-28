<?php
namespace Classes;
class Register{
	protected static $object;

	static function set($alias,$object){
		self::$object[$alias] = $object;
	}

	static function get($alias){
		if(isset($object[$alias]))
			return self::$object[$alias];
		else
			echo "该注册树上没有此对象";
	}

	static function unset($alias){
		unset(self::$object[$alias]);
	}
}