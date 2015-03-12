<?php
	fwrite(STDOUT, 'input a starting number: ');
	$snumber=trim(fgets(STDIN));
	fwrite(STDOUT, 'input ending number: ');
	$enumber=trim(fgets(STDIN));

	// if ($argv == 3){
	
for($i = $snumber; $i<=$enumber; $i+=$snumber ){
	fwrite(STDOUT, "This is: $i\n");
	}





