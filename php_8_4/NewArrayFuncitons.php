<?php

// Before PHP 8.4

$animals = ['dog', 'cat', 'cow', 'duck', 'goose'];

$animal = null;
foreach ($animals as $value) {
    if (str_starts_with($value, 'c')) {
        $animal = $value;
        break;
    }
}

var_dump($animal); // string(3) "cat"

// IN PHP 8.4

$animal = array_find(
    $animals,
    static fn (string $value): bool => str_starts_with($value, 'c'),
);

var_dump($animal); // string(3) "cat"

$array = [
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant',
];

// Find the first animal with a name longer than 4 characters.
var_dump(array_find_key($array, function (string $value, $key) {
    return strlen($value) > 4;
}));

// Check, if any animal name is longer than 5 letters.
var_dump(array_any($array, function (string $value) {
    return strlen($value) > 5;
}));

// Check, if all animal names are shorter than 12 letters.
var_dump(array_all($array, function (string $value) {
    return strlen($value) < 12;
}));

// Check, if all array keys are strings.
var_dump(array_all($array, function (string $value, $key) {
    return is_string($key);
}));

// There are 4 new array functions as mentioned above
// And for reference below are list of all of them.
// 1. array_find
// 2. array_find_key
// 3. array_any
// 4. array_all
