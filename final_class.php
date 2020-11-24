<?php

final class main{
	// private static $name="yatharth";  // we can declare variable as private or protected in final class but access them out side class will throw error;
	public static $name="yatharth";
	public $lastname="vataliya";

	// we can make method as public,private and protected in final class also ;

	public function display(){
		echo "display of class main is called";
	}
	public static function _display_(){
		echo "_display_ of class main is called";
	}

	public static function return_static(){
		return new static();
	}
}
echo main::$name;
main::_display_(); // we can access static properties like in normal class;
var_dump($main=main::return_static()); // we can create object of final class like this
$main->_display_();
$main->lastname="yatharth vataliya is my full name";
echo $main->lastname;
$main1=new main(); // we can create object of final class like normal object creation
echo $main1->lastname;
// class child extends main{
		// we can not extends the final class to any class;
		// this not valid and throw error :- Fatal error: Class child may not inherit from final class (main) in G:\htdocs\PHP_EXTRA\final.php on line 26
// }
?>
