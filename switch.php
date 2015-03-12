<?php
	$value = 'Hello!';

switch (gettype($value)) {
    case 'integer':
        echo '$value is an integer';
        break;
    case 'float':
        echo '$value is a float';
        break;
    case 'boolean':
        echo '$value is a boolean';
        break;
    case 'array':
        echo '$value is an array';
        break;
    case 'null':
        echo '$value is null';
        break;
    case 'string':
        echo '$value is a string';
        break;
}



 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
        echo "today is monday"; // Output Monday
        break;
     case 2:
     	echo "today is tuesday";
     	break;
     case 3:
     	echo "today is wednesday";
     	break;
     case 4:
     	echo "today is thursday";
     	break;
     case 5:
     	echo "today is friday";
     	break;
     case 6:
     	echo "today is Saturday";
     	break;
     case 7:
     	echo "today is Sunday";
     	break;

         // Output Tuesday
     // etc through day 7
 }