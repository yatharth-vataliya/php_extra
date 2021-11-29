<?php

// From php8.1 we can now unpack array that contains string keys.

// PHP supported unpacking inside arrays through the spread operator before, but only if the arrays had integer keys. Now it is possible to unpack arrays with string keys too.

$tempArray = [
    "a" => "Nothing",
    "b" => "Something",
    "c" => "doThing"
];

$tempArray2 = [
    "e" => "Everthing",
    "d" => "dareIt",
    "f" => "FourKey"
];

$main = ['start', 'end', ...$tempArray, ...$tempArray2];

var_dump($main);