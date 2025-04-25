<?php

// demo of type hinting in php

function display(string $str)
{
    echo "this your argument $str ";
}

display("yatharth vataliya <br/> \n");

function display1(?string $str)
{
    // here " ? " means that value can be null or string type
    echo "this is your argument $str ";
}

display1('this is demo string <br/>');
display1(null);
// display1(); this will Fatal error: Uncaught ArgumentCountError

echo "\n";

class Type
{
    public int $id = 21;

    public string $name = 'KOYA'; // both are invalid at this time but in future version like php 7.4 can have functionality to typehint the variable also;

    public function returntype(): string {}
}
