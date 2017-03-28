<?php
namespace Classes;

class Factory{
	static function getUser($id){
		$key = "userid_".$id;
		$user = Register::get($key);
		if(!$user){
			$user = new User($id);
			Register::set($key,$user);
		}
	}
}