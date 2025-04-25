<?php

interface partial
{
    const NAME = 'YATHARTH';
    // public $name="name"; // this will throw Fatal error: Interfaces may not include member variables in G:\htdocs\PHP_EXTRA\partial_implementation.php on line 4

    // protected function display(); //  this will throw Fatal error: Access type for interface method partial::display() must be omitted in G:\htdocs\PHP_EXTRA\partial_implementation.php on line 4

    public function display();

    public function displayname(): string;
}
abstract class imp implements partial
{
    // This is possible only through abstract class ;
    public function disp() {}
}
