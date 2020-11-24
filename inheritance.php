<?php
class first{
	public static $static="AU";
	public $name="yatharth";
	public function __construct(){
		echo __CLASS__;
	}
	public static function return_static(){
		return new static();
	}

	private static function Display(){
		echo "Display of Class first";
	}


}
class second extends first{
	public function __construct(){ //if subclass have its own __construct method that time super class __construct method is not automatically called. If subclass have no __construct method then by default super class __construct method is called if present at super class;
		echo __CLASS__;	
		echo "nothing";
		parent::__construct();
	}
	public static function return_static() : second{
		return new static();
	}
	public static function Display(){
		echo "Display of Class second";
	}

	/*public function Display(){
		echo "Display of Class second";
	}*/ // this is not valid to change static method to non static method in subclass ;
}
// first::Display(); // this will throw -> Fatal error: Uncaught Error: Call to private method first::Display() from context '' in G:\htdocs\PHP_EXTRA\inheritance.php:31 Stack trace: #0 {main} thrown in G:\htdocs\PHP_EXTRA\inheritance.php on line 31
$sec=new second();
var_dump($sec);
$sec::$static="NOTHING";
$sec->name="YATHARTH";
var_dump($sec);
$first=new first();
$first->name="YATHARTH VATALIYA";
$first::$static="ATIMIYA UNIVERSITY";
echo "<br/>";
var_dump($sec);
echo "<br/>";
var_dump($sec::$static);
echo "<br/>";
var_dump((new first())->name);
echo "<br/>";
var_dump($sec3=new first());
var_dump($sec4=new first);
var_dump($sec5=new first);
// var_dump((new first())::$static);
// var_dump($sec->return_static()::$static);
// var_dump((new first())->return_static()::$static);
?>