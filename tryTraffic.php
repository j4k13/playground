<?php
	date_default_timezone_set('America/New_York');
	$trafficFile = file_get_contents("traffic.txt");
	//http://www.511virginia.org/mobile/?menu_id=twitter
	//var_dump($trafficFile);
	$trafficMatch[] = 0;
	preg_match_all("#<li>Accident: (.*); #",$trafficFile,$trafficMatch);
	//var_dump($trafficMatch[1]);
	$theWhere[] = 0;
	$revisedWhere[] = 0;
	$iterator = 0;
	foreach($trafficMatch[1] as $line)
	{
	preg_match_all("#in (.*?) .#",$line,$theWhere[$iterator]);
	//var_dump($theWhere[1]);
	$iterator++;
	}
	//var_dump($theWhere);
	$iterator = 0;
	foreach($theWhere as $index)
	{
		$revisedWhere[$iterator] = $index[1];
		$iterator++;
	}
	//var_dump($revisedWhere);
	$finalWhere[] = 0;
	for($iterator = 0 ; $iterator < sizeOf($revisedWhere) ; $iterator++)
	{
		$finalWhere[$iterator] = rtrim($revisedWhere[$iterator][0],".");
	}
	var_dump($finalWhere);
?>
