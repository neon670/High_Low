<?php
$bottles = 10;
$bottle = 1;
  while ($bottles > 0) {
    echo "$bottles bottles of beer on the wall,";
    echo "$bottles bottles of beer, \n";
    echo "take one down and pass it around\n";
     $bottles--;
    // echo "$bottles of beer on the wall ";
    

if($bottles == 1 ){
	$bottle = "bottle";
}elseif($bottles <= 0) {
echo "OH NO,NEED MORE BEER!!!";
	}
}	
?>