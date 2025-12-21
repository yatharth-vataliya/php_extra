<?php

// Before PHP 8.5

function getPhpVersion(): string
{
    return 'PHP 8.4';
}

getPhpVersion(); // No warning

// IN PHP 8.5

#[\NoDiscard]
function noDiscardPhpVersion(): string
{
    return 'PHP 8.5';
}

noDiscardPhpVersion(); // this will throw warning because we specified no discard attribute while defining funciton but we are not catching value in any variable.

// or we have to use it like below. What I done is simple type cat to void.
(void) noDiscardPhpVersion();

echo "but code will work because above mention issue will only throw warning and not a fatal error which stops the execution";
