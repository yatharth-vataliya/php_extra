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
        if (is_null(static::$instance)) {
            static::$instance = new Singleton();
        }

        return static::$instance;
    }
}

var_dump(Singleton::getInstance());
// object(Singleton)#1 (0) {}

var_dump(Singleton::getInstance());
// object(Singleton)#1 (0) {}

?>