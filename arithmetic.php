<?php
	$a=1;
	$b=98;

// 	function add($a, $b) {
//     echo $a + $b;
//     echo "\n";
// }
// 	add(5, 5);

// function subtract($a, $b) {
//     echo $a - $b;
//     echo "\n";
// }
// 	subtract(10, 5);

// function multiply($a, $b) {
//     echo $a * $b;
//     echo "\n";
// }
// 	multiply(10, 15);

// function divide($a, $b) {
// 	echo $a / $b;
// 	echo "\n";
// }	
// 	divide(120, 6);

// function modules($a, $b) {
//     echo $a % $b;
//     echo "\n";
// }
// 	modules(122, 7);


// 	function compare($a, $b, $strict) {
//     if ($strict === true) {
//         echo $a === $b ? 'True' : 'False';
//     } else {
//         echo $a == $b ? 'True' : 'False';
//     }
// }
// 		compare(10,1,88)

	// function add($a, $b) {
 //    if (is_numeric($a) && is_numeric($b)) {
 //        echo $a + $b;
 //    } else {
 //        echo "ERROR: Both arguments must be numbers\n";
 //    	}
    	
	// }
	// 	add(9, 0);
function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return false;
    	}
    	
	}
function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		if($b == 0){
			return false;
	}
		return $a / $b;
		}else{
			return false;
			}
		}
		

		 $sum = add($a, $b);
		 echo "the sum of ($a) and ($b) is ($sum)";

// function error($value)
// 	if($value == 0){
// 		return false;
// 	}
// }

// function inspect($variable = null, $dump = true) {
//     // Same as if ($dump == true) {...}
//     if ($dump) {
//         var_dump($variable);
//     } else {
//         print_r($variable);
//     }
// }
//  inspect();
//  inspect(array(1,2,3), false);
//  inspect(array(1,2,3));

// function add($a, $b) {
//     if (is_numeric($a) && is_numeric($b)) {
//         return $a + $b;
//     } else {
//         return null;
//     }
// }
// 	add(0, 9);

?>