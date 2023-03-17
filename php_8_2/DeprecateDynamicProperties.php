<?php

# PHP < 8.2

class User
{
    public $name;
}

$user = new User();
$user->last_name = 'Doe'; // This will work fine before php 8.2

$user = new stdClass();
$user->last_name = 'Doe';

# PHP 8.2

class User1
{
    public $name;
}

$user = new User1();
$user->last_name = 'Doe'; // Deprecated notice

$user = new stdClass();
$user->last_name = 'Doe'; // Still allowed