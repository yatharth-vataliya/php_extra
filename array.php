<?php

[
    'name' => 'yatharth',
    'sir name' => 'vataliya',
    'last name' => 'narendrabhai',
]; // this will work properly :)

$array[0] = 'hello';
var_dump($array);
// $array[0]['one']='One'; // this is not valid throw error and terminate the script;
// var_dump($array);
$arr = [];
$arr = 'string'; // it will convert array object to string object;
var_dump($arr); // this will work properly;

$plus = ['name' => 'yatharth', 'city' => 'kalavad'];

$plus = ['mobile' => 9876543211]; // this statement will reinitialize the the array with key: mobile and value: 9876543211;

$plus = $plus + ['study' => 'mscit']; // but this will add element as key and value in the existing array;

$plus += ['rollno' => 20]; // this will same as above line

$plus[] = 'hello'; // this will add hello as its element;

$plus[] = ['bike' => 'nothing']; // this will create new array pointing to existing key or you can say it will create multidimensional array;

$plus[] = ['class' => 'f2']; // this will create new array pointing to existing key or you can say it will create multidimensional array;

var_dump($plus);

echo '<br/><br/><br/>';

$var = ['hello', 'this', 'is', 'array', 'usring', 'Array'];

var_dump($var);
