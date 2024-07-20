<?php

class PrivateClass
{
    private string $name = 'Yatharth Vataliya';

    public function getName(): string
    {
        return $this->name;
    }
}

$pc = new PrivateClass;

echo $pc->getName();

echo PHP_EOL;

// echo $pc->name; // this will give error for accessing private property outside of class.

echo (fn () => $this->name)->call($pc); // this code will successfully get value of private property of class.

echo PHP_EOL;
