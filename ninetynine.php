<?php
$bottles = 10;
$switch = "bottles";
  while ($bottles > 0) {
    echo "$bottles bottles of beer on the wall,";
    echo "$bottles bottles of beer, \n";
    echo "take one down and pass it around\n";
     $bottles--;
    // echo "$bottles of beer on the wall ";
    

if($bottles == 1 ){
	$switch = "bottle";
}elseif($bottles <= 0) {
echo "OH NO,NEED MORE BEER!!!";
	}
}	
?>