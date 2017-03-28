<?php
namespace Classes\Strategy;
use Classes\UserStrategy;
class FemaleStrategy implements UserStrategy{
	function showAd(){
		echo "Female Ad";
	}
	function showCategory(){
		echo "Female Categoty";
	}
}