<?php

class demo{
	public $name;
	// we can define constructor as private,protected and public  but error when try to call private constructor out side the class 
	/*private function __construct(){
		echo "constructer is called <br/>";
		return "hello"; // this is valid but no effect at this time;
	}*/

	public function __construct(){
		echo "constructer is called <br/>";
		return "hello"; // this is valid but no effect at this time;
	}

	public function value(){
		return "Nothing is just return instead of string";
	}
	// constructor can be public protected or private ; and protected and private give error like another normal variable at calling out of class ;

	public function __destruct(){
		echo "desctructer is called <br/>";
	}

	public function __toString(){
		return $this->value();
	}

}
class demo1 extends demo{
	/*public function __construct(){
		parent::__construct(); // we can not call private function from out side the class so this is also not valid and throw error;
	}*/
}

$demo1=new demo1();
/*
$demo=new demo;
var_dump($demo->name);
echo $demo;
var_dump($demo);
var_dump(is_object($demo));*/
?>