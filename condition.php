<?php

$name = 'everthing';
// if($name == 'yatharth' || 'everthing' || 'something') // not valid with any operator
if ($name == 'yatharth' || $name == 'nothing' || $name == 'something') {
    echo $name."\n";
} else {
    echo 'No Match';
}
echo "\n";
if (false !== true) {
    echo "condition TRUE \n";
} else {
    echo "condition FALSE \n";
}

$a = 10;
$b = 12;
$c = 13;

if ($a > $b == $c) {
    echo 'True part is run';
} else {
    echo 'False part is run';
}
