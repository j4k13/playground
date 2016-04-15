<?php
	
	date_default_timezone_set('America/New_York');
	//make array or list of people objects
	//make array of matches for names
	$namematch[] = 0;
	//get file string for parse 
	$namestring = file_get_contents("persons.txt");
	//parse with regex don't include ":" to eliminate catergories
	preg_match_all("#<span class=\"c3 c4\">(.*?)</span>#",$namestring,$namematch );
	var_dump(implode($namematch[1]));
	//preg_match_all("#\D{3}#",$name2,$namematch2);
	//$output = fopen("output.txt","w");
	//var_dump();
	//foreach($namematch2 as $line)
	//	var_dump($line);
	//names loop
	//make array for matches to info
	//regex to grab info for each object
	//<span something 3 >(something for string|\d{2} stuff for in between </span>
	//loop for objects
		//loop for 8 attributes

	//class to store the info into for people
	class person
	{
		}
	
?>
