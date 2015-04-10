<?php
$random = rand(1,100);
// if $argv = 3
// $random = rand($argv[1], $argv[2]);
// $number
fwrite(STDOUT, 'Guess the number between 1-100:');
do {
	$number = fgets(STDIN);
		if( $number == $random ){
			fwrite(STDIN, 'You are Rght: ');
		}elseif( $number > $random){
	 		fwrite(STDIN, ' Guess lower: ');
		}elseif($number < $random){
			fwrite(STDOUT, 'Guess Higher: ');
		}

	}	 
		while ($random!= $number);

