 <?php

 // Converts array into list n1, n2, ..., and n3
 // function humanizedList($array) {
 //   // Your solution goes here!
 // }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);
 // $break = implode(',' $physicistsArray)


 // Humanize that list
 // $famousFakePhysicists = humanizedList($physicistsArray);

 $lastItem = array_pop($physicistsArray);

 $famousFakePhysicists = implode(', ', $physicistsArray) . " and {$lastItem}";
 // $famousFakePhysicists = asort($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";


 ?>