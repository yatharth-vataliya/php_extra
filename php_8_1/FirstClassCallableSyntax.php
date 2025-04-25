<?php

class Demo
{
    public static function display()
    {
        echo 'Yatharth Vataliya'.PHP_EOL;
    }
}

$display = [(new Demo), 'display']; // this syntax is array callable

$display();

// $displayAgain = ['Demo', 'display'];

$displayAgain = [Demo::class, 'display']; // For use case like this (Demo::class) class resolution string function must be static function

$displayAgain();

echo '<br/>'.PHP_EOL;

$display = (new Demo)->display(...); // this syntax is new feature of php8.1

$doP = strlen(...);

echo $doP('nothing');

echo '<br/>'.PHP_EOL;

$display();

echo PHP_EOL;
