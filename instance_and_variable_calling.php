<?php

class Dog
{
    public static $count = 1;

    public $catch = [];

    public function __construct($value = null)
    {
        echo ' called <br> ';
        echo self::$count.' <br> ';
        self::$count++;
        $this->catch[] = $value;

    }

    public $array = [];

    public function add(?string $value = null)
    {

        $this->array[] = $value;
    }
}

$d1 = new Dog('my name is ');
$d2 = new Dog('yatharth vataliya');
$d3 = new Dog('from atmiya university');
$d1->add('yatharth');
// var_dump($d1->array);
$d2->add('vataliya');
// var_dump($d2->array);
$d3->add('at atmiya');
var_dump($d3->array);
echo '<br>';
var_dump($d1->catch);
