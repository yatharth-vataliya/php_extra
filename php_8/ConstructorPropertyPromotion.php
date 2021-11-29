<?php

// Constructor Property Promotion means you can direct declare varible at class level through its constructor with as below example :-

// PHP version 7.x

/*

class Point {

    public $x = null;
    public $y = null;
    public $z = null;

    public function __construct(float $x = 0.0, float $y = 0.0, float $z = 0.0){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

*/

// PHP version 8.0

class Point
{
    public function __construct(
        public float $x = 1.0,
        public float $y = 2.0,
        public float $z = 3.0
    ) {
    }

    public function __toString(): string
    {
        return "{$this->x} -- {$this->y} -- {$this->z}";
    }
}


$p = new Point();

echo $p;

echo "<br/>";

echo PHP_EOL;

$p2 = new Point(21, 22, 23);

echo $p2;
