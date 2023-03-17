<?php

# PHP 8.2

trait Foo
{
    public const CONSTANT = 1; // This will generate error before php 8.2
}

class Bar
{
    use Foo;
}

var_dump(Bar::CONSTANT); // 1
// var_dump(Foo::CONSTANT); // Fatal Error

/*
 *
 * You cannot access the constant through the name of the trait, 
 * but, you can access the constant through the class that uses the trait.
 *
 */