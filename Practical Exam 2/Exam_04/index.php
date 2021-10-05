<?php
	
	$date1 = new DateTime("2019-05-31");
	$date2 = new DateTime("2018-04-05");
	
	//Pass the value of the difference of the two DateTime
	$interval = $date1->diff($date2);
	
	//Display values on Year, Month, and Day Format
	echo $interval->y . " Year(s), " . $interval->m." Month(s), ".$interval->d." Day(s) ";
?>