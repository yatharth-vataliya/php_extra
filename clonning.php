<?php

class name{
	public $name;
}

$name=new name();
$name->name="yatharth";
var_dump($name);
echo "<br/>";
$name2=clone $name;
$name2->name="not valid";
var_dump($name2);
echo "<br/>";
var_dump($name);

?>