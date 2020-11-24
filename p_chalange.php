<?php

$alphabets = [];

for($i = 1,$count = 65; $i < 27; $i++,$count++){
	$alphabets[$i] = chr($count);
}

// var_dump($character);

// $get_string = $_SERVER['argv'][1];

echo "Please Insert Any String You want : - ";

$get_string = fgets(STDIN);

$get_string = strtoupper($get_string);

$get_string = strrev($get_string);

$get_string_array = str_split($get_string);

$loop_count = 0;

$final_output = NULL;

foreach ($get_string_array as $character) {
	foreach ($alphabets as $key => $value) {
		if($value == $character){
			if($loop_count == 0){
				$final_output .= "{$key}";
				$loop_count++;
			}else{
				$temp = $loop_count + (int)$key;
				$final_output .= "{$temp}";
				$loop_count++;
			}
		}
	}
}

echo "{$final_output}";



?>