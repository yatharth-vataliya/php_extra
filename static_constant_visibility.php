<?php

static $name = 'yatharth'; // this is okay
// public static $name="yatharth"; // this will give error;

class static_demo
{
    private static $name1 = 'vataliya';

    public $lastname = 'VATALIYA';

    // var static $firstname="YATHARTH"; // this will give error;
    public static $firstname = 'YATHARTH';

    const NAME = 'yatharth vataliya complete'; // default specifier is public; and also you cannot declare constant as static modifier;

    /*public static function __construct(){
        echo "static constructor";
    }*/ // this will give error like Fatal error: Constructor static_demo::__construct() cannot be static in G:\htdocs\PHP_EXTRA\static_constant_visibility.php on line 6
    public static function access_static()
    {
        // echo $this->name1; // this will give error
        echo self::$name1;
    }
}
echo static_demo::access_static(); // this is okay
// echo static_demo::$lastname; //this will give error
$static = new static_demo;
$static->access_static();
echo '<br/>';
echo $static::$firstname;
echo '<br/>';
$static::access_static();
echo static_demo::NAME;
// echo static_demo::$name1; // this will give error

function keep_track()
{
    static $count = 0;
    $count++;
    echo $count;
    echo '<br />';
}

keep_track();
keep_track();
keep_track();
