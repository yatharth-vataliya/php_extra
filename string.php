<?php

function __(string $str)
{
    echo $str;
}

echo __('Hello, World <br/>');
$name = 'yatharth';
$lastname = 'vataliya <br/>';
echo $name.$lastname;
echo '<br/>'; // line number 10 and line number 12 have same effect
$name = $name.$lastname;
echo $name;
echo '<br/>';
$name = 'AU';
$lastname = '@AU';
echo $name,$lastname;
echo '<br/>';
$name .= $lastname;
echo $name;
$name = 'hello';
$lastname = 'world';
echo '<br/><br/><br/>';
echo " ${name} and ${lastname}"; // it will produce  hello and world  as output
// $reuse=$name+$lastname; // this will throw Warning: A non-numeric value encountered in G:\htdocs\PHP_EXTRA\string.php on line 25
// echo $reuse;
echo '<br/>';
echo 'nohing';
echo '<br/>';

$str = 'nothing';
echo $str[0];  // it will work proper so we can use indexing of character to get them but not slicing like python

class Dc
{
    public const NAME = 'YATHARTH';
}

// $herdoc = <<<FILE
// My name is {Dc::NAME}
// FILE; //can't workig because of case sensitivity

// echo Dc::name; // error
