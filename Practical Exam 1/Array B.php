<?php
	$number  = array(9863,7127,2020,80,131,55,100);
	sort($number); //Sort numbers from lowest to highest
	$a = '';
	$alength = count($number);
	for($i=1; $i <= $alength; $i++)
	{
		//Check if not empty to prevent error Undefined Offset: 7
		if(!empty($number[$i]))
		{
			//Check if number has a remainder if divided into 2
			//If true, Add 1 to make it a even number
			//Else, Add to the string for display
			if($number[$i]%2 == 1)
			{
				$a .= $number[$i] + 1 ." ";
			}
			else
			{
				$a .= $number[$i] . " ";
			}
		}
	}
	
	echo $a;
	
	
	
?>