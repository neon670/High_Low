<?php

		// $numbers = array(1, 2, 3, 4, 5);
		// // Loop 1
		// foreach ($numbers as $key => $value) {
		//     echo "{$value}\n";
		//     // Loop 2
		//     for ($i = 1; $i <= 10; $i++) {
		//         if ($i == 2) {
		//             echo "{$i}\n";
		//             break 2;
		//         }
		//     }
		// }
		// echo "done!\n";

	for($i=1; $i <=100; $i++){
		if($i % 2 == 1){
			echo $i."\n";
			continue; 
		}
		echo "$i this is an even number\n";
	}
	// for($i=1; $i<=100; $i++){
	// 	echo $i."\n";
	// 	if($i==5){
	// 		break;
	// 	}
	// }
	// 		echo "we have finished";
