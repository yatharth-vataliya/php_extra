<?php

class Demo
{
    public function display()
    {
        echo "Yatharth Vataliya";
    }
}

$display = [(new Demo), 'display']; // this syntax is array callable

$display();

echo "<br/>".PHP_EOL;

$display = (new Demo)->display(...); // this syntax is new feature of php8.1

$doP = strlen(...);

echo $doP('nothing');

echo "<br/>".PHP_EOL;

$display();

echo PHP_EOL;