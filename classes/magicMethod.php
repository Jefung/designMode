<?php
namespace Classes;
class MagicMethod{
	//将对象单做输出时返回字符串
	public function __toString(){
		return "this is a Object!!!\nDont't print it!!!";
	}
	//调用对象不存在的function时调动该函数  如: MagicMethod::test();
	public function __call($name,$argument){
		echo "Calling object method '$name'".implode(",",$argument)."<br/>";
	}
	public static function __callStatic($name,$argument){
		echo "Calling object static method '$name'".$name.implode(",",$argument)."<br/>";
	}


	//调用对象/类不存在的变量时调用该函数
	private $data = array();		//私有数组
	public function __set($key,$value){
		$this->data[$key] = $value;

	}
	public function __get($key){
		if(array_key_exists($key, $this->data)){
			return $this->data[$key];
		}else{
			echo "该类中不存在'".$key."'元素"."<br>";
		}
	}

	//将对象作为函数使用时调用 如magicmethod(5);
	public function __invoke(){
		echo "不准调用对象作为函数"."<br/>";
	}
}