<?php

// Before PHP 8.3

// This function needs to be manually implemented.
function getBytesFromString(string $string, int $length) {
    $stringLength = strlen($string);

    $result = '';
    for ($i = 0; $i < $length; $i++) {
        // random_int is not seedable for testing, but secure.
        $result .= $string[random_int(0, $stringLength - 1)];
    }

    return $result;
}

$randomDomain = sprintf(
    "%s.example.com",
    getBytesFromString(
        'abcdefghijklmnopqrstuvwxyz0123456789',
        16,
    ),
);

echo $randomDomain;

// IN PHP 8.3

// A \Random\Engine may be passed for seeding,
// the default is the secure engine.
$randomizer = new \Random\Randomizer();

$randomDomain = sprintf(
    "%s.example.com",
    $randomizer->getBytesFromString(
        'abcdefghijklmnopqrstuvwxyz0123456789',
        16,
    ),
);

echo $randomDomain;