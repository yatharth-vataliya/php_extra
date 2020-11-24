<?php
class sta{
	public const NAME="yatharth";
	public static $name="yatharth";
	public $nonstatic="non static";
	public static $called=0;
	public function __construct($message=null){

		if($message!==null){
			echo $message;
			return;
			// return new self; // this will cause script to return to is's calling point. No another statement will execute in this function after this " return; " statement;
		}

		echo "constructor is called ".(++static::$called);
	}

	/*public static function __construct(){

	}*/ // this is invalid and throw error Fatal error: Constructor sta::__construct() cannot be static in G:\htdocs\PHP_EXTRA\static_change.php on line 2
	public static function star(){
		echo __CLASS__;
	}

	public static function static_return(){
		return new static("this is calle from static_return method");
	}

	public static function sta_return(){
		return new sta();
	}
}

$object=new sta();
var_dump($object);
$object->nonstatic="this is non static";
$object2=new sta();
var_dump($object2);
$object3=new sta();
$object4= clone $object3;
$object5= clone $object4;
echo "<br/>";
echo $object5::$name;
echo " <br/>";
var_dump($object3);
var_dump($object4);
var_dump($object5);
var_dump((new sta())->static_return());
var_dump((new sta())->static_return());
// sta::$name="modify name to YATHARTH";
$static=$object->static_return();
var_dump($static);
sta::$name="modify name to YATHARTH";
echo "<br/>";
echo $object5::$name="NOTHING";
echo " <br/>";
var_dump($static::$name);
var_dump($static::static_return());
var_dump(sta::static_return());
var_dump(sta::static_return());
var_dump(sta::sta_return()::$name);
$stardust=sta::sta_return();
echo "<pre>";
var_dump($stardust);
echo "</pre>";
echo $stardust::$name;
// conclusion :- any static property is single for all objets and for all class;
class next extends sta{
	public static function display(){
		echo sta::$name;
		static::star();
	}


}

(new next())->display();
next::display();
echo "<pre>";
foreach(sta::static_return() as $key=>$value):
	echo "key is $key and value is $value";
endforeach;
echo "</pre>";

echo "<br/>";

echo sta::$called;

?>