<?php


// Before PHP 8.5

$components = parse_url('https://php.net/releases/8.4/en.php');

var_dump($components['host']);
// string(7) "php.net"

// IN PHP 8.5

use Uri\Rfc3986\Uri;

$uri = new Uri('https://php.net/releases/8.5/en.php');

var_dump($uri->getHost());
// string(7) "php.net"
