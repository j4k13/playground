<?php
	
	date_default_timezone_set('America/New_York');
	//make array or list of people objects
	//make array of matches for names
	$namematch[] = 0;
	//get file string for parse 
	$namestring = file_get_contents("persons.txt");
	//parse with regex don't include ":" to eliminate catergories
	preg_match_all("#<span class=\"c3 c4\">(.*?)</span>#",$namestring,$namematch);
	var_dump($namematch[1]);
		
?>
