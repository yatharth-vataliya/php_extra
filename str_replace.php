<?php

$search = ['A', 'B', 'C', 'D', 'E'];
$replace = ['B', 'C', 'D', 'E', 'F'];
$subject = 'A';
echo '<pre>';
print_r($search);
print_r($replace);
print_r($subject);
echo '</pre>';

print_r(str_replace($search, $replace, $subject));
echo '<br/>';
echo '<pre>';
print_r($search);
print_r($replace);
print_r($subject);
echo '</pre>';
