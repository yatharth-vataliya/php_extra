<?php

$username = 'nothing';
$password = 'nothing';

// Before PHP 8.4

$connection = new PDO(
    'sqlite:foo.db',
    $username,
    $password,
); // object(PDO)

$connection->sqliteCreateFunction(
    'prepend_php',
    static fn ($string) => "PHP {$string}",
);

$connection->query('SELECT prepend_php(8.4) as php');

// IN PHP 8.4

$connection = PDO::connect(
    'sqlite:foo.db',
    $username,
    $password,
); // object(Pdo\Sqlite)

$connection->createFunction(
    'prepend_php',
    static fn ($string) => "PHP {$string}",
); // Does not exist on a mismatching driver.

$query = $connection->query('SELECT prepend_php(8.4) as php');

var_dump($query->fetchAll());

// New subclasses Pdo\Dblib, Pdo\Firebird, Pdo\MySql, Pdo\Odbc, Pdo\Pgsql, and Pdo\Sqlite of PDO are available.
