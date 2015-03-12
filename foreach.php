<?php

$things = array(
		'Sgt. Pepper', 
		"11", 
		null, 
		array(1,2,3), 
		3.14, 
		"12 + 7", 
		false, 
		(string) 11);

	foreach($things as $data){
		if(is_int($data)){
			echo "{$data} is a integer\n";
		}elseif (is_bool($data)){
			echo "{$data} is a bool\n"; 
		}elseif (is_float($data)) {
			echo "{$data} is a float\n";
		}elseif (is_array($data)){
			echo "{\$data} is array\n".implode(" ,", $thing);
		}elseif (is_null($data)) {
			echo "{$data} is null\n";
		}elseif (is_string($data)) {
			echo "{$data} is string\n";
		}else {
			echo "$things\n";
		}
		if(is_scalar($data)){
			echo "{$data} is scalar\n";
		}
		// integer, float, boolean, array, null, or string
	}