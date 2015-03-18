<?php

//order by sales units high to low
//Units | Full Name     | Employee #
//5       Bob Boberson    1

// blankScreen();
	// $reportName = array_shift($rows);
	// $reportDate = array_shift($rows);
	// $officeName = array_shift($rows);

	// foreach ($rows as $key => $row) {
	// 	$trimmedRow = trim($row, "* =");
	// 	if (empty($trimmedRow)){
	// 		unset($row[$key]);
	// 	}
	// }
	// array_shift($rows);
	// print_r($rows);


function parseContacts($filename)
{


	$handle = fopen($filename, 'r');
	$contentsString = fread($handle, filesize($filename));
	$contactsArray = explode("\n", $contentsString);

	fclose($handle);


	
	foreach ($contactsArray as $key => $newInfo) {
		$newArray[] = explode(",", $newInfo);
		
	}

		return $newArray;

	$reportName = array_shift($rows);
	$reportDate = array_shift($rows);
	$officeName = array_shift($rows);


	foreach ($rows as $key => $row) {
		$trimmedRow = trim($row, "* =");
		if (empty($trimmedRow)){
			unset($row[$key]);
		}
	}

	$employeeArray = $formatArray($rows);
	$arrayOfSales = array_column($employeesArray, 'sales');
	$arrayofName = array_column($employeesArray, 'name');
	$arrayofEmployeeNumber = array_column($employeesArray, 'number');



asort($arrayOfSales);



}




var_dump(parseContacts('report.txt'));





