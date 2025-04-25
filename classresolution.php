<?php

namespace App\ClassResolution;

class Scope
{
    public $name = 'yatharth';

    public function callme()
    {
        echo 'self :'.self::class;
        echo '<br>';
        echo 'static :'.static::class;
        echo '<br>';
    }
}
$sc = new Scope;
$sc->callme();

class Scope1
{
    public $name = 'love';
}
/*	function display(Scope $scope){
        echo $scope->name;
    }
    $scope="scope";
    display($scope);
    display(new Scope);*/

$key_value = [];
function bind($key, \Closure $value)
{
    $val = $value();
    global $key_value;
    $key_value[$key] = $val;
}
function getSingleton($key)
{
    global $key_value;

    return $key_value[$key];
}

bind(Scope::class, function () {
    return 'this is scope class';
});

bind(\App\ClassResolution\Scope1::class, function () {
    // return "this is scope1 class";
    return new \App\ClassResolution\Scope1;
});

$singleton = getSingleton(\App\ClassResolution\Scope1::class)->name;
echo $singleton;

for ($i = 0; $i <= 3; $i++) {
    echo $i;
}
