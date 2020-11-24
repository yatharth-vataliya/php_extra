<?php 
header("Content-Type: application/json; charset=UTF-8");  // if we don't mention this header() function with this specific parameter then we have to use JSON.parse() function  when we recieve the response at ajax call page.
$name = $_POST['name'];

$response = [
	'name' => $_POST['name'],
	'sir name' => 'default',
	'last nae' => 'nothing'
];

echo json_encode($response);
?>