<?php

class Solar
{
    public array $attributes = [
        'Solar Flare',
        'Magnetic Storms',
        'Generate Heat'
    ];

    public function __construct()
    {
        echo self::class . " is executed \n";
    }

    public function __destruct(){
        echo "Dead \n";
    }

    private function getAttributes(): array
    {
        return $this->attributes;
    }
}

/*$solar1 = new Solar();

$solar2 = $solar1;

var_dump($solar1);
var_dump($solar2); // you will get object of Solar class.
unset($solar1); // now we are unsetting $solar1 variable.

var_dump($solar1); // now you will get nothing because we already deleted solar1 variable.
var_dump($solar2); // still you get value in this variable but expected to be empty and solve this we have new 'WeekMap' class, and we call this as week reference.

unset($solar2);*/

$solarx = new Solar();
$weekMap = new WeakMap();

$weekMap[$solarx] = [ 'this is solarx array first element', 'this is solarx second element'];

var_dump($weekMap); // this will dump entire WeekMap instance.
unset($solarx);

var_dump($weekMap); // at this point $weekMap is also reset.
