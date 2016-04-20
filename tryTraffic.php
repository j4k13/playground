<?php
	date_default_timezone_set('America/New_York');
	$trafficFile = file_get_contents("traffic.txt");
	//http://www.511virginia.org/mobile/?menu_id=twitter
	//var_dump($trafficFile);
	$trafficMatch[] = 0;
	preg_match_all("#<li>Cleared: (.*); #",$trafficFile,$trafficMatch);
	var_dump($trafficMatch[1]);
?>
