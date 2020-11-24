<?php

require_once('acm4.php');

class MyClass3 extends MyClass2
{
    public $publ = "haresh1";
    protected $protec = "ambrish2";
    private $priva= "chirag3";

     function printHello1()
    {
        echo $this ->publ;
        echo $this ->protec;
        echo $this ->priva;
    }
}

$obj3 = new MyClass3();
$obj3 ->printHello1();
print_r($obj3);
?>