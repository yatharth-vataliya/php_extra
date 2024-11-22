<?php

//PHP < 8.1

function countAndIterate(Iterator $value): void
{
    if (! ($value instanceof Countable)) {
        throw new TypeError('value must be Countable');
    }

    foreach ($value as $val) {
        echo $val;
    }

    echo count($value);
}

//PHP 8.1

function countAndIterate2(Iterator&Countable $value): void
{
    foreach ($value as $val) {
        echo $val;
    }

    echo count($value);
}

