<?php
define("BASEDIR",dirname(__DIR__));
//自动加载类
include BASEDIR."\\classes\\load.php";
spl_autoload_register("\\Classes\\Load::myautoload");

//策略模式的实现
// class Page{
// 	protected $strategy;

// 	function index(){
// 		$this->strategy->showAD();
// 		echo "<br/>";
// 		$this->strategy->showCategory();
// 	}

// 	function setStrategy(Classes\UserStrategy $strategy){
// 		$this->strategy = $strategy;
// 	}
// }


// $page = new Page();
// if(isset($_GET['female']))
// 	$strategy = new Classes\Strategy\FemaleStrategy();
// else
// 	$strategy = new Classes\Strategy\MaleStrategy();
// $page->setStrategy($strategy);
// $page->index();

//数据对象映射模式（工厂+注册树）

class Page{
	function index(){
		 $user = Classes\factory::getUser(2);
	}
	function test(){
		 $user = Classes\factory::getUser(5);
		// echo "11";
	}
}
$page = new Page();
$page->index();
$page->test();
?>