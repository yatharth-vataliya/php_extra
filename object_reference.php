<?php
class object_reference{
	public $name="YATHARTH";
}

$obj=new object_reference();

echo $obj->name;
echo "<br/>";

$obj2=$obj;

echo $obj2->name;
echo "<br/>";

$obj2->name="XYZ";

echo $obj2->name; // both will print the same output XYZ instead of YATHARTH because copy like this in php is copying reference in variable not the complete obejct. For separate copy of object use clone keyword;

echo "<br/>";

echo $obj->name; // both will print the same output XYZ instead of YATHARTH because copy like this in php is copying reference in variable not the complete obejct. For separate copy of object use clone keyword;

echo "<br/>";

var_dump($obj);

echo "<br/>";

var_dump($obj2);

$obj3=&$obj;

echo "<br/>";

var_dump($obj3);

$obj3->name="MORE";

echo "<br/>";

echo $obj->name; // output of this is also : - MORE

$n=&$obj->name;

$n="WITH......";

echo "<br/>";

echo $obj->name;


?>