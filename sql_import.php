<?php

define('DSN', 'mysql:dbname=example;host=127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
try {
    $pdo = new PDO(DSN, USER, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $file = fopen('users.sql', 'r');
    $sql = fread($file, filesize('users.sql'));
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (Exception $e) {
    echo 'nothing';
}
