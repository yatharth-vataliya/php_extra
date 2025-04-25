<?php

class main
{
    // we can declare funal method as public,private and protected and access rules are same for them but they can not overridden like normal method overridding
    /*private final function display(){
        echo __FILE__;
    }*/ //  this also valid;

    final public function display()
    {
        echo __FILE__;
    }
}
class child extends main
{
    /*public final function display(){
        echo __FILE__;
    }*/

    /*public function display(){
        echo __FILE__;
    }*/

    // above both try to function overridding is throw error :- Fatal error: Cannot override final method main::display() in G:\htdocs\PHP_EXTRA\final_method.php on line 21
}

$child = new child;
$child->display();
