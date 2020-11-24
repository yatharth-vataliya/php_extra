<?php

/**
	This file demonstrate the var_dump and print_r function

*/

$array=['hello','world','from','php','and','also','laravel'];

// lets use print_r with <pre></pre>

echo "using print_r <br/>";

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br/><br/><br/><br/>";
//lets do that again but with type cast as object

echo "<pre>";
$obj=(object)$array;
print_r($obj);
echo "</pre>";

echo "<br/><br/><br/><br/>";

//lets use var_dump

echo "using var_dump <br/>";

echo "<pre>";
var_dump($array);
echo "</pre>";

echo "<br/><br/><br/><br/>";

echo "<pre>";
$obj=(object)$array;
var_dump($obj);
echo "</pre>";

echo "<br/><br/><br/><br/>";

echo "try to store out put of both function and then print it <br/>";

// echo print_r($array); // this will run without error;

$print_r=print_r($array,true); //parameter is TRUE, this function will return a string. Otherwise, the return value is TRUE. 

echo $print_r; // this will print the string as key value not the array or you can say that this is not a actual array 

$obj1=(object)$print_r;

// echo $obj1; // this will generate error Recoverable fatal error: Object of class stdClass could not be converted to string in G:\htdocs\PHP_EXTRA\var_dump_print_r.php on line 55

echo  "<br/><br/><br/>";

print_r($obj1);

echo  "<br/><br/><br/>";

var_dump($obj1);

echo  "<br/><br/><br/>";

echo "using var_dump";

echo "<br/>";

$var_dump=var_dump($array);

echo $var_dump; // var_dump function has void as return;



?>