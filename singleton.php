<?php

final class Singleton
{
    private static $instance;

    private function __construct()
    {
        // ...
    }

    public static function getInstance(): Singleton
    {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton;
        }

        return self::$instance;
    }
}

var_dump(Singleton::getInstance());
// object(Singleton)#1 (0) {}

var_dump(Singleton::getInstance());
// object(Singleton)#1 (0) {}
