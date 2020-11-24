<?php 
define('YATHARTH', "XXXXXXXX"); // this will create a global constant variable;
/*
	
		There is no need of '$' sign before  constant variables
	
*/

const NO="THIS IS GLOBAL CONSTANT USING CONST KEYWORD";

echo NO;

// const $YES="NOTHING"; // this will give syntax;

class main{
	
	// public static const NAME='YATHARTH VATALIYA'; // we can not declare constant as static variable it will throw error :- Fatal error: Cannot use 'static' as constant modifier in G:\htdocs\PHP_EXTRA\const.php on line 13
	public const NAME='YATHARTH VATALIYA';
	protected const CALL="CALL";
	// private const NAME='YATHARTH VATALIYA'; // we can declare constants as public,private and protected also like normal variable and access them are same as the normal variable but there is no need of '$' sign at declaration and also at calling that variable and you must to use '::' this scope resolution operator to use or call it;
	const YATHARTH="Redeclaration of YATHARTH constant in main class";	
	const NO="Redeclaration of NO constant in main class"; // this is valid but not override the global constant and make new constant as main class scope ;
	// const NO="Redeclaration of NO constant in main class"; // this will throw Fatal error: Cannot redefine class constant main::NO in G:\htdocs\PHP_EXTRA\const.php on line 23

	public function display(){
	
		// global NAME;  // this will throw error :-Parse error: syntax error, unexpected 'NAME' (T_STRING), expecting variable (T_VARIABLE) or '$' in G:\htdocs\PHP_EXTRA\const.php on line 15
		
		// echo NAME; // this will give a Warning: Use of undefined constant NAME - assumed 'NAME' (this will throw an Error in a future version of PHP) in G:\htdocs\PHP_EXTRA\const.php on line 16
		// and print NAME on screen and also not terminate the execution of the script;
		
		// echo $this->NAME; // this will give Notice: Undefined property: main::$NAME in G:\htdocs\PHP_EXTRA\const.php on line 18d
		
		// echo static::name; // this will throw error Fatal error: Uncaught Error: Undefined class constant 'name' in G:\htdocs\PHP_EXTRA\const.php:19 Stack trace: #0 G:\htdocs\PHP_EXTRA\const.php(23): main->display() #1 {main} thrown in G:\htdocs\PHP_EXTRA\const.php on line 19
		echo self::YATHARTH;
		echo self::NO;
		echo NO; // this will also work it means const are by default global variables ;
		echo static::NAME; // this is valid and print the text on the screen;
		echo self::NAME; // this is valid and print the text on the screen;
		echo YATHARTH; // this will work because we decalre this constant using define method;
	}
}
class child extends main{
	public const NAME=__CLASS__; // we can also override them like normal variable in inheritance;
	public function discard(){
		echo NO; // this will also work it means const are by default global variables ;
		echo self::NAME; 
		echo self::CALL; //  this is also work and it means that in inheritance constants are also inherited ;
		echo YATHARTH; // this will work because we decalre this constant using define method;
	}
}

// echo main::NAME; // this will throw error :-Fatal error: Uncaught Error: Cannot access private const main::NAME in G:\htdocs\PHP_EXTRA\const.php:31 Stack trace: #0 {main} thrown in G:\htdocs\PHP_EXTRA\const.php on line 31
$main=new main();
// echo $main->NAME; // this will give Notice: Undefined property: main::$NAME in G:\htdocs\PHP_EXTRA\const.php on line 46
echo main::NAME; // this also valid and work;
// main::NAME="HELLO"; // this will give error Parse error: syntax error, unexpected '=' in G:\htdocs\PHP_EXTRA\const.php on line 48
echo $main::NAME; // this will also work;
$main->display();
$child=new child();
$child->discard(); 

// Works as of PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"
?>