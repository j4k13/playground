<?php
	date_default_timezone_set('America/New_York');
        $whereFile = file_get_contents("weather.xml");
        $whereMatch[] = 0;
        preg_match_all("#<cap:areaDesc>(.*?)</cap:areaDesc>#",$whereFile,$whereMatch);
        var_dump($whereMatch[1]);
	$whatMatch[] = 0;
	preg_match_all("#<summary>(.*?)</summary>#",$whereFile,$whatMatch);
	var_dump($whatMatch[1]);

?>
