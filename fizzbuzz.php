<?php

for($i=1; $i<=100;$i++){
	
	if($i % 15 == 0){
		fwrite(STDOUT, "fizz buzz\n");
	}elseif ($i % 3 == 0) {
		fwrite(STDOUT, "fizz\n");
	}elseif ($i % 5 == 0) {
		fwrite(STDOUT, "buzz\n");
	}else{
		echo "$i\n";
	}

}



