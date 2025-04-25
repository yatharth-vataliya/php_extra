<?php

$i = 0;

switch ($i) {
    case 0:
        echo ' 0 is printed';
    case 1:
        echo ' 1 is printed';
    case 2:
        echo ' 2 is printed';
}

echo "\n";

// above will print

/*

it will execute all the case because there is not break statement

0 is printed 1 is printed 2 is printed

*/

switch ($i) {
    case 0:
        echo ' 0 is printed';
    case 1:
        echo ' 1 is printed';
        break;
    case 2:
        echo ' 2 is printed';
}

echo "\n";

// above will print

/*

it will execute the all the cases unitl the break statement is executed

0 is printed 1 is printed

*/

switch (2) {
    case 0:
        echo ' 0 is printed';
    case 1:
        echo ' 1 is printed';
        break;
    case 2:
        echo ' 2 is printed';
    default:
        echo ' this is default statement';
        break; // see the php manual for the numberic syntax
}

echo "\n";

// above will print

/*

in this state there is no break statement after the matching case so default statement will definitely executed

2 is printed this is default statement

*/

$beer = 'carlsberg';

switch ($beer) {
    case 'tuborg':
    case 'carlsberg':
    case 'heineken':
        echo 'Good choice';
        break;
    default:
        echo 'Please make a new selection...';
        break;
}
// it is possible to use semicolon as ':'

echo "\n";

$i = 1;

switch ($i) {
    case 1:
        echo 'one printed';
        echo "\n";
    case 2:
        echo 'two printed';
        echo "\n";
    case 3:
        echo 'three printed';
        echo "\n";
    case 4:
        echo 'four printed';
        echo "\n";
    default:
        echo 'default printed';
        echo "\n";
}
