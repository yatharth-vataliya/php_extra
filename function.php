<?php

function display()
{
    echo 'This is global function';
    function _iner_function()
    {
        return __FUNCTION__;
    }
}
abstract class Call
{
    public function display()
    {
        echo 'display is called successfully';
    }
}

class Now extends Call
{
    /*public function Now(){
        echo "hello Now";
        //this is deprecated in latest version of php and may be remove in new version of php;
    }*/

    public function doit()
    {
        // display(); //it generate error that function not defined;
        // $this->display(); // this will call super class or this class method named display();
        display(); // this will call global function that is defined globally;
        echo _iner_function(); // for this line of code or you can say for this _iner_function to work fist we have to call display() function where the implementation of _iner_function is
    }
    /*public function doit(int $y){
        echo $y;
    }*/ // in php there is no concept of method overloading like java or other language
}
$done = new Now;
$done->doit();

function noarg()
{
    echo '<br/>';
    echo 'hello';
}

noarg('nothing', 3, 'hello'); // in php it is valid to give numbers of argument in function when there is not argument specified for that specific funciton
