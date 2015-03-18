<?php

function parseContacts($filename)
{
	
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $ContactsArray = explode("\n", $contents);
    fclose($handle);

    foreach ($ContactsArray as $line) {
    	$newArray[] = explode("|", $line);
    	
    }
    	return $newArray;
    // $ContactsArray = implode("|", $contents);

    
  // var_dump($ContactsArray);
   
}
// var_dump($contacts);

var_dump(parseContacts('contacts.txt'));

 	// $filename = 'contacts.txt';
    
    

  //   return $contacts;

