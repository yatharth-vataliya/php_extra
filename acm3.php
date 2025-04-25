<?php

// require_once('kint.phar');

class MyClass
{
    public $public;

    protected $protected;

    private $private;

    public function __construct($par, $par1, $par2)
    {
        $this->public = $par;
        $this->protected = $par1;
        $this->private = $par2;
    }

    public function printHello1()
    {
        echo $this->public;
        echo $this->private;
        echo $this->protected;
    }
}

// $obj = new MyClass();
// $obj->printHello1();
/*
echo "<pre>";
print_r ($obj);
echo "<pre>";*/
