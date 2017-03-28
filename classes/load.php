<?php
namespace Classes;
class Load{
	static function myautoload($class){
		require BASEDIR."\\".$class.".php";
		echo BASEDIR."\\".$class.".php";
	}
}
?>