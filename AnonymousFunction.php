<?php

/*class T1
{
    private string $name = 'Yatharth';

    private function display()
    {
        echo $this->name;
    }

    public function callClosure($call)
    {
        $call();
    }
}

class T2 extends T1
{
    private string $name = 'Vataliya';

    private function display()
    {
        echo $this->name;
    }
}

$t2 = new T2();
$closure = function () {
    $this->display();
};
$t2->callClosure($closure->bindTo(new T1)); // This will throw error about private method accessing
*/
class A
{
    private $val;
    function __construct($val)
    {
        $this->val = $val;
    }
    function getClosure()
    {
        //returns closure bound to this object and scope
        return function () {
            return $this->val;
        };
    }
}

$ob1 = new A(1);
$ob2 = new A(2);

$cl = $ob1->getClosure();
echo $cl(), "\n";
$cl = $cl->bindTo($ob2);
echo $cl(), "\n";
