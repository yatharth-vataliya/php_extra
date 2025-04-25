<?php

$filename = 'car.jpg';
$file = fopen($filename, 'r');
var_dump($file);
$data = fread($file, filesize($filename));
var_dump($data);
