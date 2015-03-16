<?php
	$flipCount = 0;
	do {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			echo "<div class=\"coin\">H</div>";
		}
		else {
			echo "<div class=\"coin\">T";
		}
	} while ($flip);
	$flip = "were";
	$last = "flips";
	if ($flipCount == 1) {
		$verb = "was";
		$last = "flip";
	}
	echo "There {$flip} {$flipCount} {$last}!";
	?>

// <?php
// 	   $name = "noe";
//    $nameLength = strlen($name); 
// $randomNumber = rand(0, $nameLength - 1); 
// $randomLetter = substr($name, $randomNumber, 1); 
// print $randomLetter;


	// Create an array and push on the names
 //    of your closest family and friends
    // $name = array();
    // array_push($name, "Noe");
    // array_push($name, "Jon");
    // array_push($name, "Ja");
    // array_push($name, "Lome");
    // array_push($name, "Pol");
    // array_push($name, "Wash");
    // array_push($name, "Tood");
    
  		// print_r($name);
 
    
    
	// // Sort the list
	// sort ($name);

	// // Randomly select a winner!
 //    $randomName = array_rand($name, 1);
	// // Print the winner's name in ALL CAPS
	// print strtoupper($name[$randomName]);
?>