<?php

#[Attribute(Attribute::TARGET_METHOD)]
class AttributeExample
{
    public function __construct(?string $class = null)
    {
        echo 'This is class '.$class."\r\n";
    }
}
