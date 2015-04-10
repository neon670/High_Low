<?php




function logMessage($logLevel, $message)
{
	date_default_timezone_set("America/Chicago");
	$date = date('Y-m-d H:i:s');
    $filename = 'logDate.txt';
    $handle = fopen($filename, 'a');
    fwrite($handle, $date . " " . $logLevel . $message . PHP_EOL);
    fclose($handle);
}
//to do ad function to email 
function logError($message){
	logMessage('[Error]', $message);
}

logMessage("[INFO]", "This is an info message.");
logError("This is an  error info message.");


// $newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

// $filename = 'cities.txt';
// $handle = fopen($filename, 'a');
// foreach ($newCities as $city) {
//     fwrite($handle, $city . PHP_EOL);
// }

// echo 'file was written' . PHP_EOL;

// READ FROM IT
// $contents = trim(fread($handle, filesize($filename)));
// $contentArray =  explode("\n", $contents);
// var_dump($contentArray);

// fclose($handle);

