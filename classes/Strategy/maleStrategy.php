<?php
namespace Classes\Strategy;
use Classes\UserStrategy;
class MaleStrategy implements UserStrategy{
	function showAd(){
		echo "Male Ad";
	}
	function showCategory(){
		echo "Male Categoty";
	}
}