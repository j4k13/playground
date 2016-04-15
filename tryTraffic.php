<?php
	date_default_timezone_set('America/New_York');
	$trafficFile = file_get_contents("511.html");
	//var_dump($trafficFile);
	$trafficMatch[] = 0;
	preg_match_all("#<p style=\"font-weight:bold;\">(.*?)</p>#",$trafficFile,$trafficMatch);
	var_dump($trafficMatch[1]);
?>
