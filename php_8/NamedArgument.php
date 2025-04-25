<?php

// Named Argument means you can call function by its parameter named at calling time so no need to give complete list of argument at calling time

function manyArguments($first, $second = null, $third = null, $fourth = null): array
{
    return ['first' => $first, 'second' => $second, 'third' => $third, 'fourth' => $fourth];
}

// PHP version 7.x

/*

$manyArgumentsFunction = manyArguments('yatharth',null, null, 'vataliya');

*/

// PHP version 8.0

$manyArgumentsFunction = manyArguments(first: 'yatharth', fourth: 'vataliya');

var_dump($manyArgumentsFunction);

function state(mixed ...$arguments)
{
    var_dump($arguments);
}

state(name: 'yatharth', sirname: 'vataliya'); // This means giving named argument with function that contains
// spread operator in function declaration create key value pair of given arguments for exmaple :-
// ['name' => 'yatharth', 'sirname' => 'vataliya']
state('something', 'else', 'is here', why: 'no why');
// [0 => 'something', 1 => 'else', 2 => 'is here', 'why' => 'no why']
