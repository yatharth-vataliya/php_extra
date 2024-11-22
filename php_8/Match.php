<?php

// as PHP version 7.x

switch (8.0) {
    case '8.0':
        $result = 'Oh no!';
        break;
    case 8.0:
        $result = 'This is what I expected';
        break;
}
echo $result;
//> Oh no!

// as PHP version 8

echo match (8.0) {
    '8.0' => 'Oh no!',
    8.0 => 'This is what I expected',
};
// This is what I expected

// Match expression is mainy used as alternative of switch case in PHP

echo match (8.0) {
    '8.0' => 'Oh no!',
    8.0 => 'This is what I expected',
    default => 'This is default case in case no case is found',
};

