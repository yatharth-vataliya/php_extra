<?php

// Union Types means you can assing multiple type for variable at initialization time


class Number
{
    public function __construct(
        private int|float $number
    ) {
    }
}

new Number('NaN'); // TypeError in php versiono >=8