<?php

require_once('acm3.php');

class MyClass2 extends MyClass

{
	public static $p1="nothing";
	public static $p2="acb";
	private static $p3="mon";
	public function __construct()
	{

   	parent::__construct(self::$p1,self::$p2,self::$p3);

	}
    public $pu = "haresh";
    protected $pr = "ambrish";
    private $pri= "chirag";

     function printHello1()
    {
        echo $this ->pu;
        echo $this ->pr;
        echo $this ->pri;
    }
}

$obj2 = new MyClass2();
$obj2 ->printHello1();
echo "<pre>";
print_r($obj2);
echo "<pre/>";
?>