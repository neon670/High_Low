<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function inspect($variable, $nvariable){
	if (isset($variable) && empty($variable)){
			return "$nvariable is set and empty". PHP_EOL;
	   }
	if(empty($variable)){
			return "$nvariable is empty". PHP_EOL;
		}
	if(isset($variable)){
			return "$nvariable is set". PHP_EOL;
				}
			
		}
	echo inspect($nothing, '$nothing');
	echo inspect($something, '$something');
	echo inspect($array, '$array');
// TEST: If var $nothing is set, display '$nothing is SET'
	if (isset($nothing)){
		echo '$nothing is set';
		echo "\n";
	}

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
	if (empty($nothing)){
		echo '$nothing  is empty';
		echo "\n";
	}

// TEST: If var $something is set, display '$something is SET'
	if (isset($something)){
		echo '$something is set';
		echo "\n";
	}

// Serialize the array $array, and output the results
		echo serialize($array);
		
// Unserialize the array $array, and output the results
	// echo unserialize($array);