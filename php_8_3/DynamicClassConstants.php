<?php

// Before php8.3

class Foo
{
    const PHP = 'PHP 8.2';
}

$searchableConstant = 'PHP';
var_dump('This is output of Foo::class . "::{$searchableConstant}', Foo::class."::{$searchableConstant}");
var_dump(constant(Foo::class."::{$searchableConstant}"));
var_dump(constant('Foo::PHP')); // same output as above line

// IN php8.3

class Foo3
{
    const PHP = 'PHP 8.3';
}

$searchableConstant = 'PHP';

var_dump(Foo3::{$searchableConstant});
