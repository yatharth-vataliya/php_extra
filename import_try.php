<?php

// global $data;
$data=require_once("import.php");

function display(){
	global $data;
	return $data;
}

print_r(display()['database']['prot']);

?>