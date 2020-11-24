<?php

class _static{
	public static $name="yatharth";

	public static function display(){
		_static::hi(); // it is valid to call a static function with name of the class within the class also;
	}

	public static function hi(){
		echo "HI :)";
	}

}

$static=new _static;
// echo $static->name; // this will give notice Accessing static property as non static ;

_static::display();

?>