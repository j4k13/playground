<?php
	date_default_timezone_set('America/New_York');
        $trafficFile = file_get_contents("weather.xml");
        $trafficMatch[] = 0;
        preg_match_all("#<cap:areaDesc>(.*?)</cap:areaDesc>#",$trafficFile,$trafficMatch);
        var_dump($trafficMatch[1]);
	

?>
