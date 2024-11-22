<?php

// Before PHP 8.4

class PhpVersion
{
    public function getVersion(): string
    {
        return 'PHP 8.3';
    }
}

var_dump((new PhpVersion())->getVersion());

// IN PHP 8.4

class PhpVersionNew
{
    public function getVersion(): string
    {
        return 'PHP 8.4';
    }
}

var_dump(new PhpVersionNew()->getVersion());

// Properties and methods of a newly instantiated object can now be accessed without wrapping the new expression in parentheses.
