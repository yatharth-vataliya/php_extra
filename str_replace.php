<?php  
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject='A';
echo "<pre>";
print_r($search);
print_r($replace);
print_r($subject);
echo "</pre>";

print_r( str_replace($search, $replace, $subject))	;
echo "<br/>";
echo "<pre>";
print_r($search);
print_r($replace);
print_r($subject);
echo "</pre>";
?>